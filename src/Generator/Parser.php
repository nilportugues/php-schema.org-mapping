<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/19/15
 * Time: 10:57 AM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Generator;

use DOMDocument;
use DOMElement;
use DOMNode;
use DOMXPath;

/**
 * Class Parser.
 */
class Parser
{
    /**
     * @var DOMXPath
     */
    private $xpath;

    /**
     * @param string $filePath
     */
    public function __construct($filePath)
    {
        $contents = file_get_contents($filePath);
        $contents = preg_replace('/<!--(.|\s)*?-->/', '', $contents);
        $doc = new DOMDocument();
        $doc->loadHTML($contents);

        $this->xpath = new DOMXpath($doc);
    }

    /**
     * @param                $xPath
     * @param SchemaRdfaData $schemaData
     */
    public function parseClass($xPath, SchemaRdfaData $schemaData)
    {
        $elements = $this->xpath->query($xPath);

        if ($elements->length > 0) {
            /** @var DOMElement $element * */
            foreach ($elements as $element) {
                $resourceUrl = $element->getAttribute('resource');
                $label = '';
                $classComment = '';
                $subClassOf = [];

                /** @var DOMNode $node * */
                foreach ($element->getElementsByTagName('span') as $node) {
                    $parsedLabel = $this->parseLabelNode($node);
                    if (!empty($parsedLabel)) {
                        $label = $parsedLabel;
                    }

                    $parsedClassComment = $this->parseClassCommentNode($node);
                    if (!empty($parsedClassComment)) {
                        $classComment = $parsedClassComment;
                    }
                }
                /** @var DOMNode $node * */
                foreach ($element->getElementsByTagName('a') as $node) {
                    if (!empty($node->attributes->getNamedItem('property'))
                        && $node->attributes->getNamedItem('property')->nodeValue === 'rdfs:subClassOf'
                    ) {
                        if (false === strpos($node->nodeValue, ':')) {
                            $subClassOf[] = $node->nodeValue;
                        }
                    }
                }

                if (empty($label)) {
                    $u = explode('/', $resourceUrl);
                    $label = array_pop($u);
                }

                $schemaData->addClass($resourceUrl, $label, $classComment, $subClassOf);
            }
        }
    }

    /**
     * @param                $xPath
     * @param SchemaRdfaData $schemaData
     */
    public function parseDataType($xPath, SchemaRdfaData $schemaData)
    {
        $elements = $this->xpath->query($xPath);

        if ($elements->length > 0) {
            /** @var DOMElement $element * */
            foreach ($elements as $element) {
                $resourceUrl = $element->getAttribute('resource');
                $label = '';
                $classComment = '';

                /** @var DOMNode $node * */
                foreach ($element->getElementsByTagName('span') as $node) {
                    $parsedLabel = $this->parseLabelNode($node);
                    if (!empty($parsedLabel)) {
                        $label = $parsedLabel;
                    }

                    $parsedClassComment = $this->parseClassCommentNode($node);
                    if (!empty($parsedClassComment)) {
                        $classComment = $parsedClassComment;
                    }
                }

                if (!empty($label)) {
                    $schemaData->addDataType($resourceUrl, $label, $classComment);
                }
            }
        }
    }

    /**
     * @param                $xPath
     * @param SchemaRdfaData $schemaData
     */
    public function parseProperty($xPath, SchemaRdfaData $schemaData)
    {
        $elements = $this->xpath->query($xPath);

        if ($elements->length > 0) {
            /** @var DOMElement $element * */
            foreach ($elements as $element) {
                $resourceUrl = $element->getAttribute('resource');
                $label = '';
                $classComment = '';
                $mainClass = [];
                $expectedType = [];

                /** @var DOMNode $node * */
                foreach ($element->getElementsByTagName('span') as $node) {
                    $parsedLabel = $this->parseLabelNode($node);
                    if (!empty($parsedLabel)) {
                        $label = $parsedLabel;
                    }

                    $parsedClassComment = $this->parseClassCommentNode($node);
                    if (!empty($parsedClassComment)) {
                        $classComment = $parsedClassComment;
                    }
                }

                /** @var DOMNode $node * */
                foreach ($element->getElementsByTagName('a') as $node) {
                    if (!empty($node->attributes->getNamedItem('property'))
                        && $node->attributes->getNamedItem('property')->nodeValue === 'http://schema.org/domainIncludes'
                    ) {
                        $e = explode('/', $node->attributes->getNamedItem('href')->nodeValue);
                        $class = array_pop($e);
                        $mainClass[] = $class;
                    }

                    if (!empty($node->attributes->getNamedItem('property'))
                        && $node->attributes->getNamedItem('property')->nodeValue === 'http://schema.org/rangeIncludes'
                    ) {
                        $expectedType[] = $node->nodeValue;
                    }
                }

                if (!empty($label)) {
                    $schemaData->addProperty($resourceUrl, $label, $classComment, $mainClass, $expectedType);
                }
            }
        }
    }

    /**
     * @param DOMNode $node
     *
     * @return string
     */
    private function parseLabelNode(DOMNode $node)
    {
        $label = '';

        if (!empty($node->attributes->getNamedItem('property'))
            && $node->attributes->getNamedItem('property')->nodeValue === 'rdfs:label'
        ) {
            $label = $node->nodeValue;
        }

        return $label;
    }

    /**
     * @param $node
     *
     * @return string
     */
    private function parseClassCommentNode(DOMNode $node)
    {
        $classComment = '';

        if (!empty($node->attributes->getNamedItem('property'))
            && $node->attributes->getNamedItem('property')->nodeValue === 'rdfs:comment'
        ) {
            $classComment = strip_tags($node->nodeValue);
        }

        return $classComment;
    }
}
