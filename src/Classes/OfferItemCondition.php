<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes OfferItemCondition.
 */
class OfferItemCondition
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/OfferItemCondition';

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
