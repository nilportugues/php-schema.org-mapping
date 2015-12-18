<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes DateTime.
 */
class DateTime
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/DateTime';

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
