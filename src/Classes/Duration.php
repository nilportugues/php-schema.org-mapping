<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes Duration
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Quantity: Duration (use  ISO 8601 duration format).
 */
class Duration
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Duration";

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