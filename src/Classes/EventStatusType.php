<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes EventStatusType
 * @package NilPortugues\SchemaOrg\Classes
 *
 * EventStatusType is an enumeration type whose instances represent several states that an Event may be in.
 */
class EventStatusType
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/EventStatusType";

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