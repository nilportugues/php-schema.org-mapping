<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes Integer
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Data type: Integer.
 */
class Integer
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Integer";

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