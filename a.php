<?php

class SchemaRdfaParser
{
    /**
     * @var array
     */
    private $classes = [];
    /**
     * @var array
     */
    private $properties = [];

    /**
     * @param $classUrl
     * @param $label
     * @param $classComment
     * @param $subClassOf
     */
    public function addClass($classUrl, $label, $classComment, $subClassOf) {
        $this->classes[$label] = [
            'name' => $label,
            'doc' => $classComment,
            'url' => $classUrl,
            'properties' => [],
            'subClassOf' => array_filter($subClassOf)
        ];
    }

    /**
     * @param $propertyUrl
     * @param $label
     * @param $propertyComment
     * @param $mainClass
     * @param $inheritsFrom
     */
    public function addProperty($propertyUrl, $label, $propertyComment, $mainClass, $inheritsFrom)
    {
        $this->properties[$label] = [
            'name' => $label,
            'doc' => $propertyComment,
            'url' => $propertyUrl,
            'belongsTo' => array_filter($mainClass),
            'inheritsFrom' => array_filter($inheritsFrom),
        ];
    }

    /**
     * @return array
     */
    public function getClassesWithPropertyNames()
    {
        $result = $this->classes;

        foreach($this->properties as $property) {
            if(!empty($property['belongsTo'])) {
                foreach($property['belongsTo'] as $className) {
                    if(!empty($property['inheritsFrom'])) {
                        foreach($property['inheritsFrom'] as $inheritedClass) {
                            $result[$className]['properties'][$inheritedClass][] = $property['name'];
                        }
                    }
                }
            }
        }

        return $result;
    }
}


$file = 'vendor/schemaorg/schemaorg/data/schema.rdfa';

$doc = new DOMDocument();
$doc->loadHTMLFile($file);

$xpath = new DOMXpath($doc);




$parser = new SchemaRdfaParser();

$elements = $xpath->query("/html/body/div[@typeof='rdfs:Class']");

/** @var DOMElement $element **/
foreach($elements as $element) {

    $resourceUrl = $element->getAttribute('resource');
    $label = '';
    $classComment = '';
    $subClassOf = [];

    /** @var DOMNode $node **/
    foreach($element->getElementsByTagName('span') as $node) {
        if (!empty($node->attributes->getNamedItem('property'))
            && $node->attributes->getNamedItem('property')->nodeValue === 'rdfs:label'
        ) {
            $label = $node->nodeValue;
        }

        if (!empty($node->attributes->getNamedItem('property'))
            && $node->attributes->getNamedItem('property')->nodeValue === 'rdfs:comment'
        ) {
            $classComment = strip_tags($node->nodeValue);
        }
    }
    /** @var DOMNode $node **/
    foreach($element->getElementsByTagName('a') as $node) {
        if (!empty($node->attributes->getNamedItem('property'))
            && $node->attributes->getNamedItem('property')->nodeValue === 'rdfs:subClassOf'
        ) {
            $subClassOf[] = $node->nodeValue;
        }
    }

    $parser->addClass($resourceUrl, $label, $classComment, $subClassOf);
}


$elements = $xpath->query("/html/body/div[@typeof='rdf:Property']");
/** @var DOMElement $element **/
foreach($elements as $element) {
    $resourceUrl = $element->getAttribute('resource');
    $label = '';
    $classComment = '';
    $mainClass = [];
    $inheritsFrom = [];

    /** @var DOMNode $node **/
    foreach($element->getElementsByTagName('span') as $node) {
        if (!empty($node->attributes->getNamedItem('property'))
            && $node->attributes->getNamedItem('property')->nodeValue === 'rdfs:label'
        ) {
            $label = $node->nodeValue;
        }

        if (!empty($node->attributes->getNamedItem('property'))
            && $node->attributes->getNamedItem('property')->nodeValue === 'rdfs:comment'
        ) {
            $classComment = strip_tags($node->nodeValue);
        }
    }
    /** @var DOMNode $node **/
    foreach($element->getElementsByTagName('a') as $node) {

        if (!empty($node->attributes->getNamedItem('property'))
            && $node->attributes->getNamedItem('property')->nodeValue === 'http://schema.org/domainIncludes'
        ) {
            $mainClass[] = $node->nodeValue;
        }

        if (!empty($node->attributes->getNamedItem('property'))
            && $node->attributes->getNamedItem('property')->nodeValue === 'http://schema.org/rangeIncludes'
        ) {
            $inheritsFrom[] = $node->nodeValue;
        }
    }

    $parser->addProperty($resourceUrl, $label, $classComment, $mainClass, $inheritsFrom);

}

print_r($parser->getClassesWithPropertyNames());