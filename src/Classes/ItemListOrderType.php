<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes ItemListOrderType.
 */
class ItemListOrderType
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/ItemListOrderType';

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
