<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DataType
 * @package NilPortugues\SchemaOrg\Classes
 *
 * The basic data types such as Integers, Strings, etc.
 */
class DataType
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/DataType";

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