<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes EventStatusType.
 */
class EventStatusType
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/EventStatusType';

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
