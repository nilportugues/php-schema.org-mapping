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
            'subClassOf' => array_filter($subClassOf)
        ];
    }
    /**
     * @param $classUrl
     * @param $label
     * @param $classComment
     */
    public function addDataType($classUrl, $label, $classComment) {
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
        foreach($result as &$resultingClass) {
            if(!empty($resultingClass->subClassOf)) {
                foreach($resultingClass->subClassOf as &$class) {

                    $class = $result[$class];
                }
            }
        }

        //Add the properties
        foreach ($this->properties as $propertyName => $propertyStructure) {
            foreach($propertyStructure['usedOnClass'] as $class) {
                $result[$class]->properties[$propertyName] = ['name' => $propertyName, 'parent' => $class];
            }
        }


        //Flatten the properties for easy use.
        foreach($result as $resultingClass) {
            if (!empty($resultingClass->subClassOf) && is_array($resultingClass->subClassOf)) {
                foreach($resultingClass->subClassOf as $stdClassObject) {

                    if(is_object($stdClassObject)) {
                        $next = $stdClassObject->subClassOf;
                        while(is_array($next) && !empty($next) && $object = array_pop($next)) {
                            $resultingClass->properties = array_merge($resultingClass->properties,  $object->properties);
                        }
                    }
                }
            }
        }

        return $result;
    }


}


$file = 'vendor/schemaorg/schemaorg/data/schema.rdfa';
$contents = preg_replace('/<!--(.|\s)*?-->/', '', file_get_contents($file));
$doc = new DOMDocument();
$doc->loadHTML($contents);

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
            if(false === strpos($node->nodeValue, ':')) {
                $subClassOf[] = $node->nodeValue;
            }

        }
    }

    if (empty($label)) {
        $u = explode("/", $resourceUrl);
        $label = array_pop($u);
    }

    $parser->addClass($resourceUrl, $label, $classComment, $subClassOf);

    $resourceUrl = '';
    $label = '';
    $classComment = '';
    $subClassOf = [];
}






$elements = $xpath->query("/html/body/div[@typeof='rdfs:Class http://schema.org/DataType']");

/** @var DOMElement $element **/
foreach($elements as $element) {

    $resourceUrl = $element->getAttribute('resource');
    $label = '';
    $classComment = '';

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

    if (!empty($label)) {
        $parser->addDataType($resourceUrl, $label, $classComment);
    }

    $resourceUrl = '';
    $label = '';
    $classComment = '';
}















$elements = $xpath->query("/html/body/div[@typeof='rdf:Property']");
/** @var DOMElement $element **/
foreach($elements as $element) {
    $resourceUrl = $element->getAttribute('resource');
    $label = '';
    $classComment = '';
    $mainClass = [];
    $expectedType = [];

    /** @var DOMNode $node **/
    foreach($element->getElementsByTagName('span') as $node) {
        if (!empty($node->attributes->getNamedItem('property'))
            && $node->attributes->getNamedItem('property')->nodeValue === 'rdfs:label'
        ) {
            if(empty($node->nodeValue)) {
            }
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
            $e = explode("/", $node->attributes->getNamedItem('href')->nodeValue);
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
        $parser->addProperty($resourceUrl, $label, $classComment, $mainClass, $expectedType);
    }

    $resourceUrl = '';
    $label = '';
    $classComment = '';
    $mainClass = [];
    $expectedType = [];
}






$phpPropertyCode = [];
foreach($parser->getProperties() as $property) {

    $className = $property['name'];
    $className[0] = strtoupper($className[0]);

    $allowed = [];
    foreach($property['usedOnClass'] as $belongs) {
        $allowed[] = "\t\t'".'http://schema.org/'.$belongs."'";
    }
    $allowed = implode(",\n", $allowed);

    $phpPropertyCode = <<<PHP
<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\InvalidSchemaPropertyException;
use NilPortugues\SchemaOrg\MappedProperty;
use NilPortugues\SchemaOrg\Mapping;

class {$className}
{
    const SCHEMA_URL = "{$property['url']}";
    const PROPERTY_NAME = "{$property['name']}";

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    private static \$allowedSchemas = [
{$allowed}
    ];

   /**
    * {$property['doc']}
    *
    * @param string \$class
    *
    * @return Mapping
    */
    public static function create(\$class)
    {
        self::guardAllowedSchemaClasses(\$class);

        return MappedProperty::create(\$class, self::PROPERTY_NAME, self::SCHEMA_URL);
    }

   /**
    * @param string \$class
    *
    * @throws InvalidSchemaPropertyException
    */
    private static function guardAllowedSchemaClasses(\$class) {

        if (false === empty(self::\$allowedSchemas) && false === in_array(\$class, self::\$allowedSchemas, true)) {
            throw new InvalidSchemaPropertyException(self::PROPERTY_NAME, \$class);
        }
    }
}
PHP;

    if (!file_exists('src/Properties/')) {
        mkdir('src/Properties/', 0755, true);
    }

    file_put_contents('src/Properties/'.$className.".php", $phpPropertyCode);
}













$classes = $parser->getClassesWithPropertyNames();


foreach($classes as $class) {

    $className = $class->name;

    $methods = [];
    $usableProperties = [];
    $useProperties = [];

    if(!empty($class->properties)) {
        foreach($class->properties as $propertyClassName => $property) {


            $propertyName = $property['name'];
            $parentClassName = $property['parent'];
            $propertyNameMethodName = $propertyName;
            $propertyNameMethodName[0] = strtoupper($propertyNameMethodName[0]);

            $useProperties[] = "use NilPortugues\\SchemaOrg\\Properties\\".$propertyNameMethodName.";";

            if (empty($usableProperties[$propertyNameMethodName])) {
                $usableProperties[$propertyNameMethodName] = $propertyClassName;

                $schemaClass = 'self';
                if ($parentClassName !== $className) {
                    $schemaClass = $parentClassName;
                }

                $methods[$propertyName] = <<<PHP
   /**
    * @return Mapping
    */
    public static function {$propertyName}()
    {
        return {$propertyNameMethodName}::create({$schemaClass}::schemaUrl());
    }
PHP;
            }
        }
    }



    $useProperties[] = 'use NilPortugues\SchemaOrg\Mapping;';

    sort($useProperties, SORT_REGULAR);
    $useProperties = implode("\n", array_unique($useProperties));
    ksort($methods, SORT_REGULAR);
    $methods = implode("\n\n", $methods);


    $data = (array) $class;

    $phpCode = <<<PHP
<?php
namespace NilPortugues\SchemaOrg\Classes;

{$useProperties}

/**
 * Classes {$data['name']}
 * @package NilPortugues\\SchemaOrg\\Classes
 *
 * {$data['doc']}
 */
class {$data['name']}
{
    /**
     * @var string
     */
    private static \$schemaUrl = "{$data['url']}";

   /**
    * Returns the URL of the current definition at http://schema.org
    *
    * @return string
    */
    public static function schemaUrl()
    {
        return self::\$schemaUrl;
    }

$methods
}
PHP;


    if (!file_exists('src/Classes/')) {
        mkdir('src/Classes/', 0755, true);
    }

    file_put_contents('src/Classes/'.$className.".php", $phpCode);
}

