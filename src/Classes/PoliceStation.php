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
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AddressProperty;
use NilPortugues\SchemaOrg\Properties\AggregateRatingProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\BranchCodeProperty;
use NilPortugues\SchemaOrg\Properties\BranchOfProperty;
use NilPortugues\SchemaOrg\Properties\ContainedInPlaceProperty;
use NilPortugues\SchemaOrg\Properties\ContainedInProperty;
use NilPortugues\SchemaOrg\Properties\ContainsPlaceProperty;
use NilPortugues\SchemaOrg\Properties\CurrenciesAcceptedProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\EventProperty;
use NilPortugues\SchemaOrg\Properties\EventsProperty;
use NilPortugues\SchemaOrg\Properties\FaxNumberProperty;
use NilPortugues\SchemaOrg\Properties\GeoProperty;
use NilPortugues\SchemaOrg\Properties\GlobalLocationNumberProperty;
use NilPortugues\SchemaOrg\Properties\HasMapProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\IsicV4Property;
use NilPortugues\SchemaOrg\Properties\LogoProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\MapProperty;
use NilPortugues\SchemaOrg\Properties\MapsProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\OpeningHoursProperty;
use NilPortugues\SchemaOrg\Properties\OpeningHoursSpecificationProperty;
use NilPortugues\SchemaOrg\Properties\PaymentAcceptedProperty;
use NilPortugues\SchemaOrg\Properties\PhotoProperty;
use NilPortugues\SchemaOrg\Properties\PhotosProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\PriceRangeProperty;
use NilPortugues\SchemaOrg\Properties\ReviewProperty;
use NilPortugues\SchemaOrg\Properties\ReviewsProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\TelephoneProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;

/**
 * Classes PoliceStation.
 */
class PoliceStation
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/PoliceStation';

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
    public static function additionalType()
    {
        return AdditionalTypeProperty::create(Thing::schemaUrl());
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
    public static function alternateName()
    {
        return AlternateNameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function branchCode()
    {
        return BranchCodeProperty::create(LocalBusiness::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function branchOf()
    {
        return BranchOfProperty::create(LocalBusiness::schemaUrl());
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
    public static function currenciesAccepted()
    {
        return CurrenciesAcceptedProperty::create(LocalBusiness::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function description()
    {
        return DescriptionProperty::create(Thing::schemaUrl());
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
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
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
    public static function mainEntityOfPage()
    {
        return MainEntityOfPageProperty::create(Thing::schemaUrl());
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
    public static function name()
    {
        return NameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function openingHours()
    {
        return OpeningHoursProperty::create(LocalBusiness::schemaUrl());
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
    public static function paymentAccepted()
    {
        return PaymentAcceptedProperty::create(LocalBusiness::schemaUrl());
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
    public static function potentialAction()
    {
        return PotentialActionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function priceRange()
    {
        return PriceRangeProperty::create(LocalBusiness::schemaUrl());
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
    public static function sameAs()
    {
        return SameAsProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function telephone()
    {
        return TelephoneProperty::create(Place::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
