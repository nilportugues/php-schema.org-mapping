<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes FloatType.
 */
class FloatType
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Float';

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