<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes Place.
 */
class Place extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Place';

    /**
     * @return Mapping
     */
    public static function additionalProperty()
    {
        return AdditionalPropertyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function address()
    {
        return AddressProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function aggregateRating()
    {
        return AggregateRatingProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function branchCode()
    {
        return BranchCodeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function containedIn()
    {
        return ContainedInProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function containedInPlace()
    {
        return ContainedInPlaceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function containsPlace()
    {
        return ContainsPlaceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function event()
    {
        return EventProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function events()
    {
        return EventsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function faxNumber()
    {
        return FaxNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function geo()
    {
        return GeoProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function globalLocationNumber()
    {
        return GlobalLocationNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function hasMap()
    {
        return HasMapProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isicV4()
    {
        return IsicV4Property::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function logo()
    {
        return LogoProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function map()
    {
        return MapProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function maps()
    {
        return MapsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function openingHoursSpecification()
    {
        return OpeningHoursSpecificationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function photo()
    {
        return PhotoProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function photos()
    {
        return PhotosProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function review()
    {
        return ReviewProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reviews()
    {
        return ReviewsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function telephone()
    {
        return TelephoneProperty::create(self::schemaUrl());
    }
}
