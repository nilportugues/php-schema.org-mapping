<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes MapCategoryType.
 */
class MapCategoryType
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/MapCategoryType';

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
