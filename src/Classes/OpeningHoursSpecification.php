<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ClosesProperty;
use NilPortugues\SchemaOrg\Properties\DayOfWeekProperty;
use NilPortugues\SchemaOrg\Properties\OpensProperty;
use NilPortugues\SchemaOrg\Properties\ValidFromProperty;
use NilPortugues\SchemaOrg\Properties\ValidThroughProperty;

/**
 * Classes OpeningHoursSpecification.
 */
class OpeningHoursSpecification
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/OpeningHoursSpecification';

    /**
     * Returns the URL of the current definition at http://schema.org.
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
        return ClosesProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dayOfWeek()
    {
        return DayOfWeekProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function opens()
    {
        return OpensProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function validFrom()
    {
        return ValidFromProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function validThrough()
    {
        return ValidThroughProperty::create(self::schemaUrl());
    }
}
