<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes Integer.
 */
class Integer
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Integer';

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
