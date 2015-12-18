<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes Mass.
 */
class Mass
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Mass';

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
