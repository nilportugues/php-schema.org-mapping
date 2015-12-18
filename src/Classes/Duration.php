<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes Duration.
 */
class Duration
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Duration';

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
