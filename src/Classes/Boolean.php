<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes Boolean.
 */
class Boolean
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Boolean';

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
