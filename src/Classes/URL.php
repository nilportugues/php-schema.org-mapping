<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes URL.
 */
class URL
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/URL';

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
