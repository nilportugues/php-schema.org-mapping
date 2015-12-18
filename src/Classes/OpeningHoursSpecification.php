<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\Closes;
use NilPortugues\SchemaOrg\Properties\DayOfWeek;
use NilPortugues\SchemaOrg\Properties\Opens;
use NilPortugues\SchemaOrg\Properties\ValidFrom;
use NilPortugues\SchemaOrg\Properties\ValidThrough;

/**
 * Classes OpeningHoursSpecification
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A structured value providing information about the opening hours of a place or a certain service inside a place.
 */
class OpeningHoursSpecification
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/OpeningHoursSpecification";

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
    public static function closes()
    {
        return Closes::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function dayOfWeek()
    {
        return DayOfWeek::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function opens()
    {
        return Opens::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function validFrom()
    {
        return ValidFrom::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function validThrough()
    {
        return ValidThrough::create(self::schemaUrl());
    }
}