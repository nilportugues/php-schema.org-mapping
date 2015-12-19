<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 10:43 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Generator;

class SchemaRdfaData
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
     * @var bool
     */
    private $hasBeenCalculated = false;

    /**
     * @var
     */
    private $calculatedOutput;

    /**
     * @param $classUrl
     * @param $label
     * @param $classComment
     * @param $subClassOf
     */
    public function addClass($classUrl, $label, $classComment, $subClassOf)
    {
        $url = explode('/', $classUrl);
        $nameFromUrl = array_pop($url);

        if ($label !== $nameFromUrl) {
            $label = $nameFromUrl;
        }

        $label = $this->renameIfPhpReservedWord(trim($label));

        $this->classes[$label] = (object) [
            'name' => $label,
            'doc' => $classComment,
            'url' => $classUrl,
            'properties' => [],
            'subClassOf' => array_map([$this, 'renameIfPhpReservedWord'], array_filter($subClassOf)),
        ];
    }

    /**
     * @param $classUrl
     * @param $label
     * @param $classComment
     */
    public function addDataType($classUrl, $label, $classComment)
    {
        $this->addClass($classUrl, $label, $classComment, [], []);
    }

    /**
     * @param $propertyUrl
     * @param $label
     * @param $propertyComment
     * @param $mainClass
     * @param $expectedType
     */
    public function addProperty($propertyUrl, $label, $propertyComment, $mainClass, $expectedType)
    {
        $label = $this->renameIfPhpReservedWord(trim($label));

        $this->properties[$label] = [
            'name' => $label,
            'doc' => $propertyComment,
            'url' => $propertyUrl,
            'usedOnClass' => array_map([$this, 'renameIfPhpReservedWord'], array_filter($mainClass)),
            'expectedType' => array_map([$this, 'renameIfPhpReservedWord'], array_filter($expectedType)),
        ];
    }

    /**
     * @param $name
     *
     * @return string
     */
    private function renameIfPhpReservedWord($name)
    {
        $keywords = [
            //PHP7
            'int',
            'float',
            'bool',
            'string',
            'true',
            'false',
            'null',
            'resource',
            'object',
            'mixed',
            'numeric',
            //PHP7 and under
            '__halt_compiler',
            'abstract',
            'and',
            'array',
            'as',
            'break',
            'callable',
            'case',
            'catch',
            'class',
            'clone',
            'const',
            'continue',
            'declare',
            'default',
            'die',
            'do',
            'echo',
            'else',
            'elseif',
            'empty',
            'enddeclare',
            'endfor',
            'endforeach',
            'endif',
            'endswitch',
            'endwhile',
            'eval',
            'exit',
            'extends',
            'final',
            'for',
            'foreach',
            'function',
            'global',
            'goto',
            'if',
            'implements',
            'include',
            'include_once',
            'instanceof',
            'insteadof',
            'interface',
            'isset',
            'list',
            'namespace',
            'new',
            'or',
            'print',
            'private',
            'protected',
            'public',
            'require',
            'require_once',
            'return',
            'static',
            'switch',
            'throw',
            'trait',
            'try',
            'unset',
            'use',
            'var',
            'while',
            'xor',
        ];

        if (in_array(strtolower($name), $keywords, true)) {
            $name = $name.'Type';
        }

        return $name;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @return array
     */
    public function getClassesWithPropertyNames()
    {
        if ($this->hasBeenCalculated) {
            return $this->calculatedOutput;
        }

        $result = $this->classes;

        //Link the subClasses
        foreach ($result as &$resultingClass) {
            if (!empty($resultingClass->subClassOf)) {
                foreach ($resultingClass->subClassOf as &$class) {
                    $class = $result[$class];
                }
            }
        }

        //Add the properties
        foreach ($this->properties as $propertyName => $propertyStructure) {
            foreach ($propertyStructure['usedOnClass'] as $class) {
                $result[$class]->properties[$propertyName] = ['name' => $propertyName, 'parent' => $class];
            }
        }

        //Flatten the properties for easy use.
        foreach ($result as $resultingClass) {
            if (!empty($resultingClass->subClassOf) && is_array($resultingClass->subClassOf)) {
                foreach ($resultingClass->subClassOf as $stdClassObject) {
                    if (is_object($stdClassObject)) {
                        $resultingClass->properties = array_merge($resultingClass->properties, $stdClassObject->properties);

                        $next = $stdClassObject->subClassOf;
                        while (false !== $next && $object = array_pop($next)) {
                            $resultingClass->properties = array_merge($resultingClass->properties, $object->properties);
                        }
                    }
                }
            }
        }

        $this->hasBeenCalculated = true;
        $this->calculatedOutput = $result;

        return $result;
    }
}
