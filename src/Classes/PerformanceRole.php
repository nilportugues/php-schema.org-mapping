<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\CharacterName;

/**
 * Classes PerformanceRole
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A PerformanceRole is a Role that some entity places with regard to a theatrical performance, e.g. in a Movie, TVSeries etc.
 */
class PerformanceRole
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/PerformanceRole";

   /**
    * Returns the URL of the current definition at http://schema.org
    *
    * @return string
    */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

   /**
    * @return Mapping
    */
    public static function characterName()
    {
        return CharacterName::create(self::schemaUrl());
    }
}