<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\HighPriceProperty;
use NilPortugues\SchemaOrg\Properties\LowPriceProperty;
use NilPortugues\SchemaOrg\Properties\OfferCountProperty;
use NilPortugues\SchemaOrg\Properties\OffersProperty;

/**
 * Classes AggregateOffer.
 */
class AggregateOffer
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/AggregateOffer';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

    /**
     * @return Mapping
     */
    public static function highPrice()
    {
        return HighPriceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function lowPrice()
    {
        return LowPriceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function offerCount()
    {
        return OfferCountProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function offers()
    {
        return OffersProperty::create(self::schemaUrl());
    }
}
