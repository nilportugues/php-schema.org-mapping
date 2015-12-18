<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes Specialty.
 */
class Specialty
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Specialty';

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
