<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\EducationalRole;

/**
 * Classes EducationalAudience
 * @package NilPortugues\SchemaOrg\Classes
 *
 * An EducationalAudience.
 */
class EducationalAudience
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/EducationalAudience";

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
    public static function educationalRole()
    {
        return EducationalRole::create(self::schemaUrl());
    }
}