<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes BookFormatType.
 */
class BookFormatType
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/BookFormatType';

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
