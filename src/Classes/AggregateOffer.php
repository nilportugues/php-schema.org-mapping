<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\HighPrice;
use NilPortugues\SchemaOrg\Properties\LowPrice;
use NilPortugues\SchemaOrg\Properties\OfferCount;
use NilPortugues\SchemaOrg\Properties\Offers;

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
        return HighPrice::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function lowPrice()
    {
        return LowPrice::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function offerCount()
    {
        return OfferCount::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function offers()
    {
        return Offers::create(self::schemaUrl());
    }
}
