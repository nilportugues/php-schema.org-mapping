<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes BusinessEntityType.
 */
class BusinessEntityType
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/BusinessEntityType';

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
