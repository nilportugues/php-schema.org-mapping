<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalName;
use NilPortugues\SchemaOrg\Properties\Address;
use NilPortugues\SchemaOrg\Properties\Affiliation;
use NilPortugues\SchemaOrg\Properties\AlumniOf;
use NilPortugues\SchemaOrg\Properties\Award;
use NilPortugues\SchemaOrg\Properties\Awards;
use NilPortugues\SchemaOrg\Properties\BirthDate;
use NilPortugues\SchemaOrg\Properties\Brand;
use NilPortugues\SchemaOrg\Properties\Children;
use NilPortugues\SchemaOrg\Properties\Colleague;
use NilPortugues\SchemaOrg\Properties\Colleagues;
use NilPortugues\SchemaOrg\Properties\ContactPoint;
use NilPortugues\SchemaOrg\Properties\ContactPoints;
use NilPortugues\SchemaOrg\Properties\DeathDate;
use NilPortugues\SchemaOrg\Properties\Duns;
use NilPortugues\SchemaOrg\Properties\Email;
use NilPortugues\SchemaOrg\Properties\FamilyName;
use NilPortugues\SchemaOrg\Properties\FaxNumber;
use NilPortugues\SchemaOrg\Properties\Follows;
use NilPortugues\SchemaOrg\Properties\Gender;
use NilPortugues\SchemaOrg\Properties\GivenName;
use NilPortugues\SchemaOrg\Properties\GlobalLocationNumber;
use NilPortugues\SchemaOrg\Properties\HasOfferCatalog;
use NilPortugues\SchemaOrg\Properties\HasPOS;
use NilPortugues\SchemaOrg\Properties\Height;
use NilPortugues\SchemaOrg\Properties\HomeLocation;
use NilPortugues\SchemaOrg\Properties\HonorificPrefix;
use NilPortugues\SchemaOrg\Properties\HonorificSuffix;
use NilPortugues\SchemaOrg\Properties\IsicV4;
use NilPortugues\SchemaOrg\Properties\JobTitle;
use NilPortugues\SchemaOrg\Properties\Knows;
use NilPortugues\SchemaOrg\Properties\MakesOffer;
use NilPortugues\SchemaOrg\Properties\MemberOf;
use NilPortugues\SchemaOrg\Properties\Naics;
use NilPortugues\SchemaOrg\Properties\Nationality;
use NilPortugues\SchemaOrg\Properties\NetWorth;
use NilPortugues\SchemaOrg\Properties\Owns;
use NilPortugues\SchemaOrg\Properties\Parent;
use NilPortugues\SchemaOrg\Properties\Parents;
use NilPortugues\SchemaOrg\Properties\PerformerIn;
use NilPortugues\SchemaOrg\Properties\RelatedTo;
use NilPortugues\SchemaOrg\Properties\Seeks;
use NilPortugues\SchemaOrg\Properties\Sibling;
use NilPortugues\SchemaOrg\Properties\Siblings;
use NilPortugues\SchemaOrg\Properties\Spouse;
use NilPortugues\SchemaOrg\Properties\TaxID;
use NilPortugues\SchemaOrg\Properties\Telephone;
use NilPortugues\SchemaOrg\Properties\VatID;
use NilPortugues\SchemaOrg\Properties\Weight;
use NilPortugues\SchemaOrg\Properties\WorkLocation;
use NilPortugues\SchemaOrg\Properties\WorksFor;

/**
 * Classes Person
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A person (alive, dead, undead, or fictional).
 */
class Person
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Person";

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
    public static function additionalName()
    {
        return AdditionalName::create(self::schemaUrl());
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
    public static function affiliation()
    {
        return Affiliation::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function alumniOf()
    {
        return AlumniOf::create(self::schemaUrl());
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
    public static function birthDate()
    {
        return BirthDate::create(self::schemaUrl());
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
    public static function children()
    {
        return Children::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function colleague()
    {
        return Colleague::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function colleagues()
    {
        return Colleagues::create(self::schemaUrl());
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
    public static function deathDate()
    {
        return DeathDate::create(self::schemaUrl());
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
    public static function familyName()
    {
        return FamilyName::create(self::schemaUrl());
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
    public static function follows()
    {
        return Follows::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function gender()
    {
        return Gender::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function givenName()
    {
        return GivenName::create(self::schemaUrl());
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
    public static function height()
    {
        return Height::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function homeLocation()
    {
        return HomeLocation::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function honorificPrefix()
    {
        return HonorificPrefix::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function honorificSuffix()
    {
        return HonorificSuffix::create(self::schemaUrl());
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
    public static function jobTitle()
    {
        return JobTitle::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function knows()
    {
        return Knows::create(self::schemaUrl());
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
    public static function memberOf()
    {
        return MemberOf::create(self::schemaUrl());
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
    public static function nationality()
    {
        return Nationality::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function netWorth()
    {
        return NetWorth::create(self::schemaUrl());
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
    public static function parent()
    {
        return Parent::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function parents()
    {
        return Parents::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function performerIn()
    {
        return PerformerIn::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function relatedTo()
    {
        return RelatedTo::create(self::schemaUrl());
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
    public static function sibling()
    {
        return Sibling::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function siblings()
    {
        return Siblings::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function spouse()
    {
        return Spouse::create(self::schemaUrl());
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

   /**
    * @return Mapping
    */
    public static function weight()
    {
        return Weight::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function workLocation()
    {
        return WorkLocation::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function worksFor()
    {
        return WorksFor::create(self::schemaUrl());
    }
}