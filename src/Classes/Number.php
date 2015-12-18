<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes Number
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Data type: Number.
 */
class Number
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Number";

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