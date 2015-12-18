<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes BreadcrumbList.
 */
class BreadcrumbList
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/BreadcrumbList';

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
