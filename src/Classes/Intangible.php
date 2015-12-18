<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes Intangible.
 */
class Intangible
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Intangible';

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
