<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalPropertyProperty;
use NilPortugues\SchemaOrg\Properties\AddressProperty;
use NilPortugues\SchemaOrg\Properties\AggregateRatingProperty;
use NilPortugues\SchemaOrg\Properties\BranchCodeProperty;
use NilPortugues\SchemaOrg\Properties\ContainedInPlaceProperty;
use NilPortugues\SchemaOrg\Properties\ContainedInProperty;
use NilPortugues\SchemaOrg\Properties\ContainsPlaceProperty;
use NilPortugues\SchemaOrg\Properties\EventProperty;
use NilPortugues\SchemaOrg\Properties\EventsProperty;
use NilPortugues\SchemaOrg\Properties\FaxNumberProperty;
use NilPortugues\SchemaOrg\Properties\GeoProperty;
use NilPortugues\SchemaOrg\Properties\GlobalLocationNumberProperty;
use NilPortugues\SchemaOrg\Properties\HasMapProperty;
use NilPortugues\SchemaOrg\Properties\IsicV4Property;
use NilPortugues\SchemaOrg\Properties\LogoProperty;
use NilPortugues\SchemaOrg\Properties\MapProperty;
use NilPortugues\SchemaOrg\Properties\MapsProperty;
use NilPortugues\SchemaOrg\Properties\OpeningHoursSpecificationProperty;
use NilPortugues\SchemaOrg\Properties\PhotoProperty;
use NilPortugues\SchemaOrg\Properties\PhotosProperty;
use NilPortugues\SchemaOrg\Properties\ReviewProperty;
use NilPortugues\SchemaOrg\Properties\ReviewsProperty;
use NilPortugues\SchemaOrg\Properties\TelephoneProperty;

/**
 * Classes City.
 */
class City
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/City';

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
    public static function additionalProperty()
    {
        return AdditionalPropertyProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function address()
    {
        return AddressProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function aggregateRating()
    {
        return AggregateRatingProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function branchCode()
    {
        return BranchCodeProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function containedIn()
    {
        return ContainedInProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function containedInPlace()
    {
        return ContainedInPlaceProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function containsPlace()
    {
        return ContainsPlaceProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function event()
    {
        return EventProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function events()
    {
        return EventsProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function faxNumber()
    {
        return FaxNumberProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function geo()
    {
        return GeoProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function globalLocationNumber()
    {
        return GlobalLocationNumberProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function hasMap()
    {
        return HasMapProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isicV4()
    {
        return IsicV4Property::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function logo()
    {
        return LogoProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function map()
    {
        return MapProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function maps()
    {
        return MapsProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function openingHoursSpecification()
    {
        return OpeningHoursSpecificationProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function photo()
    {
        return PhotoProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function photos()
    {
        return PhotosProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function review()
    {
        return ReviewProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reviews()
    {
        return ReviewsProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function telephone()
    {
        return TelephoneProperty::create(Place::schemaUrl());
    }
}
