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

        $this->classes[trim($label)] = (object) [
            'name' => trim($label),
            'doc' => $classComment,
            'url' => $classUrl,
            'properties' => [],
            'subClassOf' => array_filter($subClassOf),
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
        $this->properties[trim($label)] = [
            'name' => trim($label),
            'doc' => $propertyComment,
            'url' => $propertyUrl,
            'usedOnClass' => array_filter($mainClass),
            'expectedType' => array_filter($expectedType),
        ];
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
                        $next = $stdClassObject->subClassOf;
                        while (is_array($next) && !empty($next) && $object = array_pop($next)) {
                            $resultingClass->properties = array_merge($resultingClass->properties,  $object->properties);
                        }
                    }
                }
            }
        }

        return $result;
    }
}
