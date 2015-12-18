<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes BusinessFunction.
 */
class BusinessFunction
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/BusinessFunction';

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
