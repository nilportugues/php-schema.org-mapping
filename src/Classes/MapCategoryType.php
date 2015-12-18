<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MapCategoryType
 * @package NilPortugues\SchemaOrg\Classes
 *
 * An enumeration of several kinds of Map.
 */
class MapCategoryType
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/MapCategoryType";

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