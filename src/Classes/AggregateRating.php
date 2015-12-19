<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ItemReviewedProperty;
use NilPortugues\SchemaOrg\Properties\RatingCountProperty;
use NilPortugues\SchemaOrg\Properties\ReviewCountProperty;

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
        return ItemReviewedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function ratingCount()
    {
        return RatingCountProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reviewCount()
    {
        return ReviewCountProperty::create(self::schemaUrl());
    }
}
