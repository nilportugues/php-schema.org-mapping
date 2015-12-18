<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalProperty;
use NilPortugues\SchemaOrg\Properties\Address;
use NilPortugues\SchemaOrg\Properties\AggregateRating;
use NilPortugues\SchemaOrg\Properties\BranchCode;
use NilPortugues\SchemaOrg\Properties\ContainedIn;
use NilPortugues\SchemaOrg\Properties\ContainedInPlace;
use NilPortugues\SchemaOrg\Properties\ContainsPlace;
use NilPortugues\SchemaOrg\Properties\Event;
use NilPortugues\SchemaOrg\Properties\Events;
use NilPortugues\SchemaOrg\Properties\FaxNumber;
use NilPortugues\SchemaOrg\Properties\Geo;
use NilPortugues\SchemaOrg\Properties\GlobalLocationNumber;
use NilPortugues\SchemaOrg\Properties\HasMap;
use NilPortugues\SchemaOrg\Properties\IsicV4;
use NilPortugues\SchemaOrg\Properties\Logo;
use NilPortugues\SchemaOrg\Properties\Map;
use NilPortugues\SchemaOrg\Properties\Maps;
use NilPortugues\SchemaOrg\Properties\OpeningHoursSpecification;
use NilPortugues\SchemaOrg\Properties\Photo;
use NilPortugues\SchemaOrg\Properties\Photos;
use NilPortugues\SchemaOrg\Properties\Review;
use NilPortugues\SchemaOrg\Properties\Reviews;
use NilPortugues\SchemaOrg\Properties\Telephone;

/**
 * Classes TaxiStand.
 */
class TaxiStand
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/TaxiStand';

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
        return AdditionalProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function address()
    {
        return Address::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function aggregateRating()
    {
        return AggregateRating::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function branchCode()
    {
        return BranchCode::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function containedIn()
    {
        return ContainedIn::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function containedInPlace()
    {
        return ContainedInPlace::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function containsPlace()
    {
        return ContainsPlace::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function event()
    {
        return Event::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function events()
    {
        return Events::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function faxNumber()
    {
        return FaxNumber::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function geo()
    {
        return Geo::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function globalLocationNumber()
    {
        return GlobalLocationNumber::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function hasMap()
    {
        return HasMap::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isicV4()
    {
        return IsicV4::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function logo()
    {
        return Logo::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function map()
    {
        return Map::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function maps()
    {
        return Maps::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function openingHoursSpecification()
    {
        return OpeningHoursSpecification::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function photo()
    {
        return Photo::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function photos()
    {
        return Photos::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function review()
    {
        return Review::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reviews()
    {
        return Reviews::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function telephone()
    {
        return Telephone::create(Place::schemaUrl());
    }
}
