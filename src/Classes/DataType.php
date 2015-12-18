<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes DataType.
 */
class DataType
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/DataType';

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
