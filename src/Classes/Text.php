<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes Text
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Data type: Text.
 */
class Text
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Text";

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