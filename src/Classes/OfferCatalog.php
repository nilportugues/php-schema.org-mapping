<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes OfferCatalog.
 */
class OfferCatalog
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/OfferCatalog';

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
