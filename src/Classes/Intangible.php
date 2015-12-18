<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes Intangible
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A utility class that serves as the umbrella for a number of 'intangible' things such as quantities, structured values, etc.
 */
class Intangible
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Intangible";

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