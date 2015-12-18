<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalProperty;
use NilPortugues\SchemaOrg\Properties\Equal;
use NilPortugues\SchemaOrg\Properties\Greater;
use NilPortugues\SchemaOrg\Properties\GreaterOrEqual;
use NilPortugues\SchemaOrg\Properties\Lesser;
use NilPortugues\SchemaOrg\Properties\LesserOrEqual;
use NilPortugues\SchemaOrg\Properties\NonEqual;
use NilPortugues\SchemaOrg\Properties\ValueReference;

/**
 * Classes QualitativeValue
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A predefined value for a product characteristic, e.g. the power cord plug type "US" or the garment sizes "S", "M", "L", and "XL".
 */
class QualitativeValue
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/QualitativeValue";

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
    public static function equal()
    {
        return Equal::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function greater()
    {
        return Greater::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function greaterOrEqual()
    {
        return GreaterOrEqual::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function lesser()
    {
        return Lesser::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function lesserOrEqual()
    {
        return LesserOrEqual::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function nonEqual()
    {
        return NonEqual::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function valueReference()
    {
        return ValueReference::create(self::schemaUrl());
    }
}