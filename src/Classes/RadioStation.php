<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalProperty;
use NilPortugues\SchemaOrg\Properties\Address;
use NilPortugues\SchemaOrg\Properties\AggregateRating;
use NilPortugues\SchemaOrg\Properties\Alumni;
use NilPortugues\SchemaOrg\Properties\AreaServed;
use NilPortugues\SchemaOrg\Properties\Award;
use NilPortugues\SchemaOrg\Properties\Awards;
use NilPortugues\SchemaOrg\Properties\BranchCode;
use NilPortugues\SchemaOrg\Properties\Brand;
use NilPortugues\SchemaOrg\Properties\ContactPoint;
use NilPortugues\SchemaOrg\Properties\ContactPoints;
use NilPortugues\SchemaOrg\Properties\ContainedIn;
use NilPortugues\SchemaOrg\Properties\ContainedInPlace;
use NilPortugues\SchemaOrg\Properties\ContainsPlace;
use NilPortugues\SchemaOrg\Properties\Department;
use NilPortugues\SchemaOrg\Properties\DissolutionDate;
use NilPortugues\SchemaOrg\Properties\Duns;
use NilPortugues\SchemaOrg\Properties\Email;
use NilPortugues\SchemaOrg\Properties\Employee;
use NilPortugues\SchemaOrg\Properties\Employees;
use NilPortugues\SchemaOrg\Properties\Event;
use NilPortugues\SchemaOrg\Properties\Events;
use NilPortugues\SchemaOrg\Properties\FaxNumber;
use NilPortugues\SchemaOrg\Properties\Founder;
use NilPortugues\SchemaOrg\Properties\Founders;
use NilPortugues\SchemaOrg\Properties\FoundingDate;
use NilPortugues\SchemaOrg\Properties\Geo;
use NilPortugues\SchemaOrg\Properties\GlobalLocationNumber;
use NilPortugues\SchemaOrg\Properties\HasMap;
use NilPortugues\SchemaOrg\Properties\HasOfferCatalog;
use NilPortugues\SchemaOrg\Properties\HasPOS;
use NilPortugues\SchemaOrg\Properties\IsicV4;
use NilPortugues\SchemaOrg\Properties\LegalName;
use NilPortugues\SchemaOrg\Properties\Location;
use NilPortugues\SchemaOrg\Properties\Logo;
use NilPortugues\SchemaOrg\Properties\MakesOffer;
use NilPortugues\SchemaOrg\Properties\Map;
use NilPortugues\SchemaOrg\Properties\Maps;
use NilPortugues\SchemaOrg\Properties\Member;
use NilPortugues\SchemaOrg\Properties\MemberOf;
use NilPortugues\SchemaOrg\Properties\Members;
use NilPortugues\SchemaOrg\Properties\Naics;
use NilPortugues\SchemaOrg\Properties\NumberOfEmployees;
use NilPortugues\SchemaOrg\Properties\OpeningHoursSpecification;
use NilPortugues\SchemaOrg\Properties\Owns;
use NilPortugues\SchemaOrg\Properties\ParentOrganization;
use NilPortugues\SchemaOrg\Properties\Photo;
use NilPortugues\SchemaOrg\Properties\Photos;
use NilPortugues\SchemaOrg\Properties\Review;
use NilPortugues\SchemaOrg\Properties\Reviews;
use NilPortugues\SchemaOrg\Properties\Seeks;
use NilPortugues\SchemaOrg\Properties\ServiceArea;
use NilPortugues\SchemaOrg\Properties\SubOrganization;
use NilPortugues\SchemaOrg\Properties\TaxID;
use NilPortugues\SchemaOrg\Properties\Telephone;
use NilPortugues\SchemaOrg\Properties\VatID;

/**
 * Classes RadioStation
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A radio station.
 */
class RadioStation
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/RadioStation";

   /**
    * Returns the URL of the current definition at http://schema.org
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
        return Address::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function aggregateRating()
    {
        return AggregateRating::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function alumni()
    {
        return Alumni::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function areaServed()
    {
        return AreaServed::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function award()
    {
        return Award::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function awards()
    {
        return Awards::create(Organization::schemaUrl());
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
    public static function brand()
    {
        return Brand::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function contactPoint()
    {
        return ContactPoint::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function contactPoints()
    {
        return ContactPoints::create(Organization::schemaUrl());
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
    public static function department()
    {
        return Department::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function dissolutionDate()
    {
        return DissolutionDate::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function duns()
    {
        return Duns::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function email()
    {
        return Email::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function employee()
    {
        return Employee::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function employees()
    {
        return Employees::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function event()
    {
        return Event::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function events()
    {
        return Events::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function faxNumber()
    {
        return FaxNumber::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function founder()
    {
        return Founder::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function founders()
    {
        return Founders::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function foundingDate()
    {
        return FoundingDate::create(Organization::schemaUrl());
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
        return GlobalLocationNumber::create(Organization::schemaUrl());
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
    public static function hasOfferCatalog()
    {
        return HasOfferCatalog::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function hasPOS()
    {
        return HasPOS::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function isicV4()
    {
        return IsicV4::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function legalName()
    {
        return LegalName::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function location()
    {
        return Location::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function logo()
    {
        return Logo::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function makesOffer()
    {
        return MakesOffer::create(Organization::schemaUrl());
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
    public static function member()
    {
        return Member::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function memberOf()
    {
        return MemberOf::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function members()
    {
        return Members::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function naics()
    {
        return Naics::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function numberOfEmployees()
    {
        return NumberOfEmployees::create(Organization::schemaUrl());
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
    public static function owns()
    {
        return Owns::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function parentOrganization()
    {
        return ParentOrganization::create(Organization::schemaUrl());
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
        return Review::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function reviews()
    {
        return Reviews::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function seeks()
    {
        return Seeks::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function serviceArea()
    {
        return ServiceArea::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function subOrganization()
    {
        return SubOrganization::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function taxID()
    {
        return TaxID::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function telephone()
    {
        return Telephone::create(Organization::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function vatID()
    {
        return VatID::create(Organization::schemaUrl());
    }
}