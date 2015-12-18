<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\Address;
use NilPortugues\SchemaOrg\Properties\AggregateRating;
use NilPortugues\SchemaOrg\Properties\Alumni;
use NilPortugues\SchemaOrg\Properties\AreaServed;
use NilPortugues\SchemaOrg\Properties\Award;
use NilPortugues\SchemaOrg\Properties\Awards;
use NilPortugues\SchemaOrg\Properties\Brand;
use NilPortugues\SchemaOrg\Properties\ContactPoint;
use NilPortugues\SchemaOrg\Properties\ContactPoints;
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
use NilPortugues\SchemaOrg\Properties\GlobalLocationNumber;
use NilPortugues\SchemaOrg\Properties\HasOfferCatalog;
use NilPortugues\SchemaOrg\Properties\HasPOS;
use NilPortugues\SchemaOrg\Properties\IsicV4;
use NilPortugues\SchemaOrg\Properties\LegalName;
use NilPortugues\SchemaOrg\Properties\Location;
use NilPortugues\SchemaOrg\Properties\Logo;
use NilPortugues\SchemaOrg\Properties\MakesOffer;
use NilPortugues\SchemaOrg\Properties\Member;
use NilPortugues\SchemaOrg\Properties\MemberOf;
use NilPortugues\SchemaOrg\Properties\Members;
use NilPortugues\SchemaOrg\Properties\Naics;
use NilPortugues\SchemaOrg\Properties\NumberOfEmployees;
use NilPortugues\SchemaOrg\Properties\Owns;
use NilPortugues\SchemaOrg\Properties\ParentOrganization;
use NilPortugues\SchemaOrg\Properties\Review;
use NilPortugues\SchemaOrg\Properties\Reviews;
use NilPortugues\SchemaOrg\Properties\Seeks;
use NilPortugues\SchemaOrg\Properties\ServiceArea;
use NilPortugues\SchemaOrg\Properties\SubOrganization;
use NilPortugues\SchemaOrg\Properties\TaxID;
use NilPortugues\SchemaOrg\Properties\Telephone;
use NilPortugues\SchemaOrg\Properties\VatID;

/**
 * Classes Organization
 * @package NilPortugues\SchemaOrg\Classes
 *
 * An organization such as a school, NGO, corporation, club, etc.
 */
class Organization
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Organization";

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
    public static function address()
    {
        return Address::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function aggregateRating()
    {
        return AggregateRating::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function alumni()
    {
        return Alumni::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function areaServed()
    {
        return AreaServed::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function award()
    {
        return Award::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function awards()
    {
        return Awards::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function brand()
    {
        return Brand::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function contactPoint()
    {
        return ContactPoint::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function contactPoints()
    {
        return ContactPoints::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function department()
    {
        return Department::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function dissolutionDate()
    {
        return DissolutionDate::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function duns()
    {
        return Duns::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function email()
    {
        return Email::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function employee()
    {
        return Employee::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function employees()
    {
        return Employees::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function event()
    {
        return Event::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function events()
    {
        return Events::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function faxNumber()
    {
        return FaxNumber::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function founder()
    {
        return Founder::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function founders()
    {
        return Founders::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function foundingDate()
    {
        return FoundingDate::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function globalLocationNumber()
    {
        return GlobalLocationNumber::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function hasOfferCatalog()
    {
        return HasOfferCatalog::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function hasPOS()
    {
        return HasPOS::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function isicV4()
    {
        return IsicV4::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function legalName()
    {
        return LegalName::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function location()
    {
        return Location::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function logo()
    {
        return Logo::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function makesOffer()
    {
        return MakesOffer::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function member()
    {
        return Member::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function memberOf()
    {
        return MemberOf::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function members()
    {
        return Members::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function naics()
    {
        return Naics::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function numberOfEmployees()
    {
        return NumberOfEmployees::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function owns()
    {
        return Owns::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function parentOrganization()
    {
        return ParentOrganization::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function review()
    {
        return Review::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function reviews()
    {
        return Reviews::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function seeks()
    {
        return Seeks::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function serviceArea()
    {
        return ServiceArea::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function subOrganization()
    {
        return SubOrganization::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function taxID()
    {
        return TaxID::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function telephone()
    {
        return Telephone::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function vatID()
    {
        return VatID::create(self::schemaUrl());
    }
}