<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes Float
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Data type: Floating number.
 */
class Float
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Float";

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