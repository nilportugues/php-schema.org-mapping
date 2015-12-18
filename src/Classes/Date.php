<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes Date
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A date value in ISO 8601 date format.
 */
class Date
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Date";

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