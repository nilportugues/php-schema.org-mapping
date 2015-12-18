<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\FuelType;

/**
 * Classes EngineSpecification
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Information about the engine of the vehicle. A vehicle can have multiple engines represented by multiple engine specification entities.
 */
class EngineSpecification
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/EngineSpecification";

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
    public static function fuelType()
    {
        return FuelType::create(self::schemaUrl());
    }
}