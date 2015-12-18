<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\Calories;
use NilPortugues\SchemaOrg\Properties\CarbohydrateContent;
use NilPortugues\SchemaOrg\Properties\CholesterolContent;
use NilPortugues\SchemaOrg\Properties\FatContent;
use NilPortugues\SchemaOrg\Properties\FiberContent;
use NilPortugues\SchemaOrg\Properties\ProteinContent;
use NilPortugues\SchemaOrg\Properties\SaturatedFatContent;
use NilPortugues\SchemaOrg\Properties\ServingSize;
use NilPortugues\SchemaOrg\Properties\SodiumContent;
use NilPortugues\SchemaOrg\Properties\SugarContent;
use NilPortugues\SchemaOrg\Properties\TransFatContent;
use NilPortugues\SchemaOrg\Properties\UnsaturatedFatContent;

/**
 * Classes NutritionInformation
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Nutritional information about the recipe.
 */
class NutritionInformation
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/NutritionInformation";

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
    public static function calories()
    {
        return Calories::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function carbohydrateContent()
    {
        return CarbohydrateContent::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function cholesterolContent()
    {
        return CholesterolContent::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function fatContent()
    {
        return FatContent::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function fiberContent()
    {
        return FiberContent::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function proteinContent()
    {
        return ProteinContent::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function saturatedFatContent()
    {
        return SaturatedFatContent::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function servingSize()
    {
        return ServingSize::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function sodiumContent()
    {
        return SodiumContent::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function sugarContent()
    {
        return SugarContent::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function transFatContent()
    {
        return TransFatContent::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function unsaturatedFatContent()
    {
        return UnsaturatedFatContent::create(self::schemaUrl());
    }
}