<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes Specialty
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Any branch of a field in which people typically develop specific expertise, usually after significant study, time, and effort.
 */
class Specialty
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Specialty";

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