<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes Taxi
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A taxi.
 */
class Taxi
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Taxi";

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