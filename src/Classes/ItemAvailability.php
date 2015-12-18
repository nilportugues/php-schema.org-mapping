<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes ItemAvailability.
 */
class ItemAvailability
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/ItemAvailability';

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
