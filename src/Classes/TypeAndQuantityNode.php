<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AmountOfThisGood;
use NilPortugues\SchemaOrg\Properties\BusinessFunction;
use NilPortugues\SchemaOrg\Properties\TypeOfGood;
use NilPortugues\SchemaOrg\Properties\UnitCode;
use NilPortugues\SchemaOrg\Properties\UnitText;

/**
 * Classes TypeAndQuantityNode
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A structured value indicating the quantity, unit of measurement, and business function of goods included in a bundle offer.
 */
class TypeAndQuantityNode
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/TypeAndQuantityNode";

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
    public static function amountOfThisGood()
    {
        return AmountOfThisGood::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function businessFunction()
    {
        return BusinessFunction::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function typeOfGood()
    {
        return TypeOfGood::create(self::schemaUrl());
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
}