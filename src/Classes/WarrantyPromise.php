<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\DurationOfWarranty;
use NilPortugues\SchemaOrg\Properties\WarrantyScope;

/**
 * Classes WarrantyPromise
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A structured value representing the duration and scope of services that will be provided to a customer free of charge in case of a defect or malfunction of a product.
 */
class WarrantyPromise
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/WarrantyPromise";

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
    public static function durationOfWarranty()
    {
        return DurationOfWarranty::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function warrantyScope()
    {
        return WarrantyScope::create(self::schemaUrl());
    }
}