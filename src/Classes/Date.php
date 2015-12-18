<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes Date.
 */
class Date
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Date';

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
