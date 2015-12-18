<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ContactPointOption
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Enumerated options related to a ContactPoint.
 */
class ContactPointOption
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/ContactPointOption";

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