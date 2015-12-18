<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes SportsTeam
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Organization: Sports team.
 */
class SportsTeam
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/SportsTeam";

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