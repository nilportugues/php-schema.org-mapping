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
        $this->classes[trim($label)] = [
            'name' => trim($label),
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
        $this->properties[trim($label)] = [
            'name' => trim($label),
            'doc' => $propertyComment,
            'url' => $propertyUrl,
            'belongsTo' => array_filter($mainClass),
            'inheritsFrom' => array_filter($inheritsFrom),
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

        //Add properties to classes
        foreach($this->properties as $property) {
            if(!empty($property['belongsTo'])) {
                foreach($property['belongsTo'] as $className) {
                    if(!empty($className)) {
                        if (!empty($property['inheritsFrom'])) {
                            foreach($property['inheritsFrom'] as $inheritedClass) {
                                $result[$className]['properties'][$inheritedClass][] = ['name' => $property['name'], 'parent' => $className];
                            }
                        }
                    }
                }
            }
        }
        //Add subclass properties to classes.
        foreach($result as &$classData) {
            if (!empty($classData['subClassOf'])) {

                foreach($classData['subClassOf'] as $inheritedClass) {

                    $classData['properties'] = array_merge($classData['properties'], $result[$inheritedClass]['properties']);
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

    if (!empty($label)) {
        $parser->addClass($resourceUrl, $label, $classComment, $subClassOf);
    }

    $resourceUrl = '';
    $label = '';
    $classComment = '';
    $subClassOf = [];
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
            $mainClass[] = $node->nodeValue;
        }

        if (!empty($node->attributes->getNamedItem('property'))
            && $node->attributes->getNamedItem('property')->nodeValue === 'http://schema.org/rangeIncludes'
        ) {
            $inheritsFrom[] = $node->nodeValue;
        }
    }

    if (!empty($label)) {
        $parser->addProperty($resourceUrl, $label, $classComment, $mainClass, $inheritsFrom);
    }

    $resourceUrl = '';
    $label = '';
    $classComment = '';
    $mainClass = [];
    $inheritsFrom = [];
}






$phpPropertyCode = [];
foreach($parser->getProperties() as $property) {

    $className = $property['name'];
    $className[0] = strtoupper($className[0]);

    $allowed = [];
    foreach($property['belongsTo'] as $belongs) {
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

    $className = $class['name'];
    $methods = [];
    $usableProperties = [];
    $useProperties = [];
    foreach($class['properties'] as $propertyClassName => $propertyClass) {
        foreach($propertyClass as $property) {
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
                    $useProperties[] = "use NilPortugues\\SchemaOrg\\Classes\\".$parentClassName.";";
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

    $phpCode = <<<PHP
<?php
namespace NilPortugues\SchemaOrg\Classes;

{$useProperties}

/**
 * Classes {$class['name']}
 * @package NilPortugues\\SchemaOrg\\Classes
 *
 * {$class['doc']}
 */
class {$class['name']}
{
    /**
     * @var string
     */
    private static \$schemaUrl = "{$class['url']}";

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

