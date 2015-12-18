<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalProperty;
use NilPortugues\SchemaOrg\Properties\MaxValue;
use NilPortugues\SchemaOrg\Properties\MinValue;
use NilPortugues\SchemaOrg\Properties\UnitCode;
use NilPortugues\SchemaOrg\Properties\UnitText;
use NilPortugues\SchemaOrg\Properties\Value;
use NilPortugues\SchemaOrg\Properties\ValueReference;

/**
 * Classes QuantitativeValue
 * @package NilPortugues\SchemaOrg\Classes
 *
 *  A point value or interval for product characteristics and other purposes.
 */
class QuantitativeValue
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/QuantitativeValue";

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
    public static function additionalProperty()
    {
        return AdditionalProperty::create(self::schemaUrl());
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