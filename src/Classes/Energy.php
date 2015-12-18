<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes Energy.
 */
class Energy
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Energy';

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
