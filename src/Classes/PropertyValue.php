<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\MaxValue;
use NilPortugues\SchemaOrg\Properties\MinValue;
use NilPortugues\SchemaOrg\Properties\PropertyID;
use NilPortugues\SchemaOrg\Properties\UnitCode;
use NilPortugues\SchemaOrg\Properties\UnitText;
use NilPortugues\SchemaOrg\Properties\Value;
use NilPortugues\SchemaOrg\Properties\ValueReference;

/**
 * Classes PropertyValue
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A property-value pair, e.g. representing a feature of a product or place. Use the 'name' property for the name of the property. If there is an additional human-readable version of the value, put that into the 'description' property.
        
        Always use specific schema.org properties when a) they exist and b) you can populate them. Using PropertyValue as a substitute will typically not trigger the same effect as using the original, specific property.
    
 */
class PropertyValue
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/PropertyValue";

   /**
    * Returns the URL of the current definition at http://schema.org
    *
    * @return string
    */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

   /**
    * @return Mapping
    */
    public static function maxValue()
    {
        return MaxValue::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function minValue()
    {
        return MinValue::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function propertyID()
    {
        return PropertyID::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function unitCode()
    {
        return UnitCode::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function unitText()
    {
        return UnitText::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function value()
    {
        return Value::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function valueReference()
    {
        return ValueReference::create(self::schemaUrl());
    }
}