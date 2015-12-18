<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes RsvpResponseType
 * @package NilPortugues\SchemaOrg\Classes
 *
 * RsvpResponseType is an enumeration type whose instances represent responding to an RSVP request.
 */
class RsvpResponseType
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/RsvpResponseType";

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