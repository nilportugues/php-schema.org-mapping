<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AcceptsReservationsProperty;
use NilPortugues\SchemaOrg\Properties\AdditionalPropertyProperty;
use NilPortugues\SchemaOrg\Properties\AddressProperty;
use NilPortugues\SchemaOrg\Properties\AggregateRatingProperty;
use NilPortugues\SchemaOrg\Properties\AlumniProperty;
use NilPortugues\SchemaOrg\Properties\AreaServedProperty;
use NilPortugues\SchemaOrg\Properties\AwardProperty;
use NilPortugues\SchemaOrg\Properties\AwardsProperty;
use NilPortugues\SchemaOrg\Properties\BranchCodeProperty;
use NilPortugues\SchemaOrg\Properties\BrandProperty;
use NilPortugues\SchemaOrg\Properties\ContactPointProperty;
use NilPortugues\SchemaOrg\Properties\ContactPointsProperty;
use NilPortugues\SchemaOrg\Properties\ContainedInPlaceProperty;
use NilPortugues\SchemaOrg\Properties\ContainedInProperty;
use NilPortugues\SchemaOrg\Properties\ContainsPlaceProperty;
use NilPortugues\SchemaOrg\Properties\DepartmentProperty;
use NilPortugues\SchemaOrg\Properties\DissolutionDateProperty;
use NilPortugues\SchemaOrg\Properties\DunsProperty;
use NilPortugues\SchemaOrg\Properties\EmailProperty;
use NilPortugues\SchemaOrg\Properties\EmployeeProperty;
use NilPortugues\SchemaOrg\Properties\EmployeesProperty;
use NilPortugues\SchemaOrg\Properties\EventProperty;
use NilPortugues\SchemaOrg\Properties\EventsProperty;
use NilPortugues\SchemaOrg\Properties\FaxNumberProperty;
use NilPortugues\SchemaOrg\Properties\FounderProperty;
use NilPortugues\SchemaOrg\Properties\FoundersProperty;
use NilPortugues\SchemaOrg\Properties\FoundingDateProperty;
use NilPortugues\SchemaOrg\Properties\GeoProperty;
use NilPortugues\SchemaOrg\Properties\GlobalLocationNumberProperty;
use NilPortugues\SchemaOrg\Properties\HasMapProperty;
use NilPortugues\SchemaOrg\Properties\HasOfferCatalogProperty;
use NilPortugues\SchemaOrg\Properties\HasPOSProperty;
use NilPortugues\SchemaOrg\Properties\IsicV4Property;
use NilPortugues\SchemaOrg\Properties\LegalNameProperty;
use NilPortugues\SchemaOrg\Properties\LocationProperty;
use NilPortugues\SchemaOrg\Properties\LogoProperty;
use NilPortugues\SchemaOrg\Properties\MakesOfferProperty;
use NilPortugues\SchemaOrg\Properties\MapProperty;
use NilPortugues\SchemaOrg\Properties\MapsProperty;
use NilPortugues\SchemaOrg\Properties\MemberOfProperty;
use NilPortugues\SchemaOrg\Properties\MemberProperty;
use NilPortugues\SchemaOrg\Properties\MembersProperty;
use NilPortugues\SchemaOrg\Properties\MenuProperty;
use NilPortugues\SchemaOrg\Properties\NaicsProperty;
use NilPortugues\SchemaOrg\Properties\NumberOfEmployeesProperty;
use NilPortugues\SchemaOrg\Properties\OpeningHoursSpecificationProperty;
use NilPortugues\SchemaOrg\Properties\OwnsProperty;
use NilPortugues\SchemaOrg\Properties\ParentOrganizationProperty;
use NilPortugues\SchemaOrg\Properties\PhotoProperty;
use NilPortugues\SchemaOrg\Properties\PhotosProperty;
use NilPortugues\SchemaOrg\Properties\ReviewProperty;
use NilPortugues\SchemaOrg\Properties\ReviewsProperty;
use NilPortugues\SchemaOrg\Properties\SeeksProperty;
use NilPortugues\SchemaOrg\Properties\ServesCuisineProperty;
use NilPortugues\SchemaOrg\Properties\ServiceAreaProperty;
use NilPortugues\SchemaOrg\Properties\SubOrganizationProperty;
use NilPortugues\SchemaOrg\Properties\TaxIDProperty;
use NilPortugues\SchemaOrg\Properties\TelephoneProperty;
use NilPortugues\SchemaOrg\Properties\VatIDProperty;

/**
 * Classes FoodEstablishment.
 */
class FoodEstablishment
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/FoodEstablishment';

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
    public static function acceptsReservations()
    {
        return AcceptsReservationsProperty::create(self::schemaUrl());
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
        return AddressProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function aggregateRating()
    {
        return AggregateRatingProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alumni()
    {
        return AlumniProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function areaServed()
    {
        return AreaServedProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function award()
    {
        return AwardProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function awards()
    {
        return AwardsProperty::create(Organization::schemaUrl());
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
    public static function brand()
    {
        return BrandProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contactPoint()
    {
        return ContactPointProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contactPoints()
    {
        return ContactPointsProperty::create(Organization::schemaUrl());
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
    public static function department()
    {
        return DepartmentProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dissolutionDate()
    {
        return DissolutionDateProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function duns()
    {
        return DunsProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function email()
    {
        return EmailProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function employee()
    {
        return EmployeeProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function employees()
    {
        return EmployeesProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function event()
    {
        return EventProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function events()
    {
        return EventsProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function faxNumber()
    {
        return FaxNumberProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function founder()
    {
        return FounderProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function founders()
    {
        return FoundersProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function foundingDate()
    {
        return FoundingDateProperty::create(Organization::schemaUrl());
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
        return GlobalLocationNumberProperty::create(Organization::schemaUrl());
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
    public static function hasOfferCatalog()
    {
        return HasOfferCatalogProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function hasPOS()
    {
        return HasPOSProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isicV4()
    {
        return IsicV4Property::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function legalName()
    {
        return LegalNameProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function location()
    {
        return LocationProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function logo()
    {
        return LogoProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function makesOffer()
    {
        return MakesOfferProperty::create(Organization::schemaUrl());
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
    public static function member()
    {
        return MemberProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function memberOf()
    {
        return MemberOfProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function members()
    {
        return MembersProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function menu()
    {
        return MenuProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function naics()
    {
        return NaicsProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function numberOfEmployees()
    {
        return NumberOfEmployeesProperty::create(Organization::schemaUrl());
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
    public static function owns()
    {
        return OwnsProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function parentOrganization()
    {
        return ParentOrganizationProperty::create(Organization::schemaUrl());
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
        return ReviewProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reviews()
    {
        return ReviewsProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function seeks()
    {
        return SeeksProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function servesCuisine()
    {
        return ServesCuisineProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serviceArea()
    {
        return ServiceAreaProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function subOrganization()
    {
        return SubOrganizationProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function taxID()
    {
        return TaxIDProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function telephone()
    {
        return TelephoneProperty::create(Organization::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function vatID()
    {
        return VatIDProperty::create(Organization::schemaUrl());
    }
}
