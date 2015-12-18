<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes Boolean
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Boolean: True or False.
 */
class Boolean
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Boolean";

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