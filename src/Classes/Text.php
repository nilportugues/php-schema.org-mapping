<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes Text.
 */
class Text
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Text';

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
