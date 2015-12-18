<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ItemReviewed;
use NilPortugues\SchemaOrg\Properties\RatingCount;
use NilPortugues\SchemaOrg\Properties\ReviewCount;

/**
 * Classes AggregateRating.
 */
class AggregateRating
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/AggregateRating';

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
    public static function itemReviewed()
    {
        return ItemReviewed::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function ratingCount()
    {
        return RatingCount::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reviewCount()
    {
        return ReviewCount::create(self::schemaUrl());
    }
}
