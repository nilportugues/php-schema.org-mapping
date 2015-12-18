<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TaxiService
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A service for a vehicle for hire with a driver for local travel. Fares are usually calculated based on distance traveled.
 */
class TaxiService
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/TaxiService";

   /**
    * Returns the URL of the current definition at http://schema.org
    *
    * @return string
    */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }


}