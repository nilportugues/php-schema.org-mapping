<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes Distance.
 */
class Distance
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Distance';

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
