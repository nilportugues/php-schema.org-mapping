<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes DayOfWeek.
 */
class DayOfWeek
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/DayOfWeek';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }
}
