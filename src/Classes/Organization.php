<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AddressProperty;
use NilPortugues\SchemaOrg\Properties\AggregateRatingProperty;
use NilPortugues\SchemaOrg\Properties\AlumniProperty;
use NilPortugues\SchemaOrg\Properties\AreaServedProperty;
use NilPortugues\SchemaOrg\Properties\AwardProperty;
use NilPortugues\SchemaOrg\Properties\AwardsProperty;
use NilPortugues\SchemaOrg\Properties\BrandProperty;
use NilPortugues\SchemaOrg\Properties\ContactPointProperty;
use NilPortugues\SchemaOrg\Properties\ContactPointsProperty;
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
use NilPortugues\SchemaOrg\Properties\GlobalLocationNumberProperty;
use NilPortugues\SchemaOrg\Properties\HasOfferCatalogProperty;
use NilPortugues\SchemaOrg\Properties\HasPOSProperty;
use NilPortugues\SchemaOrg\Properties\IsicV4Property;
use NilPortugues\SchemaOrg\Properties\LegalNameProperty;
use NilPortugues\SchemaOrg\Properties\LocationProperty;
use NilPortugues\SchemaOrg\Properties\LogoProperty;
use NilPortugues\SchemaOrg\Properties\MakesOfferProperty;
use NilPortugues\SchemaOrg\Properties\MemberOfProperty;
use NilPortugues\SchemaOrg\Properties\MemberProperty;
use NilPortugues\SchemaOrg\Properties\MembersProperty;
use NilPortugues\SchemaOrg\Properties\NaicsProperty;
use NilPortugues\SchemaOrg\Properties\NumberOfEmployeesProperty;
use NilPortugues\SchemaOrg\Properties\OwnsProperty;
use NilPortugues\SchemaOrg\Properties\ParentOrganizationProperty;
use NilPortugues\SchemaOrg\Properties\ReviewProperty;
use NilPortugues\SchemaOrg\Properties\ReviewsProperty;
use NilPortugues\SchemaOrg\Properties\SeeksProperty;
use NilPortugues\SchemaOrg\Properties\ServiceAreaProperty;
use NilPortugues\SchemaOrg\Properties\SubOrganizationProperty;
use NilPortugues\SchemaOrg\Properties\TaxIDProperty;
use NilPortugues\SchemaOrg\Properties\TelephoneProperty;
use NilPortugues\SchemaOrg\Properties\VatIDProperty;

/**
 * Classes Organization.
 */
class Organization
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Organization';

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
    public static function alumni()
    {
        return AlumniProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function areaServed()
    {
        return AreaServedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function award()
    {
        return AwardProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function awards()
    {
        return AwardsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function brand()
    {
        return BrandProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contactPoint()
    {
        return ContactPointProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contactPoints()
    {
        return ContactPointsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function department()
    {
        return DepartmentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dissolutionDate()
    {
        return DissolutionDateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function duns()
    {
        return DunsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function email()
    {
        return EmailProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function employee()
    {
        return EmployeeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function employees()
    {
        return EmployeesProperty::create(self::schemaUrl());
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
    public static function founder()
    {
        return FounderProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function founders()
    {
        return FoundersProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function foundingDate()
    {
        return FoundingDateProperty::create(self::schemaUrl());
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
    public static function hasOfferCatalog()
    {
        return HasOfferCatalogProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function hasPOS()
    {
        return HasPOSProperty::create(self::schemaUrl());
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
    public static function legalName()
    {
        return LegalNameProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function location()
    {
        return LocationProperty::create(self::schemaUrl());
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
    public static function makesOffer()
    {
        return MakesOfferProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function member()
    {
        return MemberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function memberOf()
    {
        return MemberOfProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function members()
    {
        return MembersProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function naics()
    {
        return NaicsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function numberOfEmployees()
    {
        return NumberOfEmployeesProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function owns()
    {
        return OwnsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function parentOrganization()
    {
        return ParentOrganizationProperty::create(self::schemaUrl());
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
    public static function seeks()
    {
        return SeeksProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serviceArea()
    {
        return ServiceAreaProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function subOrganization()
    {
        return SubOrganizationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function taxID()
    {
        return TaxIDProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function telephone()
    {
        return TelephoneProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function vatID()
    {
        return VatIDProperty::create(self::schemaUrl());
    }
}
