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
use NilPortugues\SchemaOrg\Properties\AdditionalNameProperty;
use NilPortugues\SchemaOrg\Properties\AddressProperty;
use NilPortugues\SchemaOrg\Properties\AffiliationProperty;
use NilPortugues\SchemaOrg\Properties\AlumniOfProperty;
use NilPortugues\SchemaOrg\Properties\AwardProperty;
use NilPortugues\SchemaOrg\Properties\AwardsProperty;
use NilPortugues\SchemaOrg\Properties\BirthDateProperty;
use NilPortugues\SchemaOrg\Properties\BrandProperty;
use NilPortugues\SchemaOrg\Properties\ChildrenProperty;
use NilPortugues\SchemaOrg\Properties\ColleagueProperty;
use NilPortugues\SchemaOrg\Properties\ColleaguesProperty;
use NilPortugues\SchemaOrg\Properties\ContactPointProperty;
use NilPortugues\SchemaOrg\Properties\ContactPointsProperty;
use NilPortugues\SchemaOrg\Properties\DeathDateProperty;
use NilPortugues\SchemaOrg\Properties\DunsProperty;
use NilPortugues\SchemaOrg\Properties\EmailProperty;
use NilPortugues\SchemaOrg\Properties\FamilyNameProperty;
use NilPortugues\SchemaOrg\Properties\FaxNumberProperty;
use NilPortugues\SchemaOrg\Properties\FollowsProperty;
use NilPortugues\SchemaOrg\Properties\GenderProperty;
use NilPortugues\SchemaOrg\Properties\GivenNameProperty;
use NilPortugues\SchemaOrg\Properties\GlobalLocationNumberProperty;
use NilPortugues\SchemaOrg\Properties\HasOfferCatalogProperty;
use NilPortugues\SchemaOrg\Properties\HasPOSProperty;
use NilPortugues\SchemaOrg\Properties\HeightProperty;
use NilPortugues\SchemaOrg\Properties\HomeLocationProperty;
use NilPortugues\SchemaOrg\Properties\HonorificPrefixProperty;
use NilPortugues\SchemaOrg\Properties\HonorificSuffixProperty;
use NilPortugues\SchemaOrg\Properties\IsicV4Property;
use NilPortugues\SchemaOrg\Properties\JobTitleProperty;
use NilPortugues\SchemaOrg\Properties\KnowsProperty;
use NilPortugues\SchemaOrg\Properties\MakesOfferProperty;
use NilPortugues\SchemaOrg\Properties\MemberOfProperty;
use NilPortugues\SchemaOrg\Properties\NaicsProperty;
use NilPortugues\SchemaOrg\Properties\NationalityProperty;
use NilPortugues\SchemaOrg\Properties\NetWorthProperty;
use NilPortugues\SchemaOrg\Properties\OwnsProperty;
use NilPortugues\SchemaOrg\Properties\ParentProperty;
use NilPortugues\SchemaOrg\Properties\ParentsProperty;
use NilPortugues\SchemaOrg\Properties\PerformerInProperty;
use NilPortugues\SchemaOrg\Properties\RelatedToProperty;
use NilPortugues\SchemaOrg\Properties\SeeksProperty;
use NilPortugues\SchemaOrg\Properties\SiblingProperty;
use NilPortugues\SchemaOrg\Properties\SiblingsProperty;
use NilPortugues\SchemaOrg\Properties\SpouseProperty;
use NilPortugues\SchemaOrg\Properties\TaxIDProperty;
use NilPortugues\SchemaOrg\Properties\TelephoneProperty;
use NilPortugues\SchemaOrg\Properties\VatIDProperty;
use NilPortugues\SchemaOrg\Properties\WeightProperty;
use NilPortugues\SchemaOrg\Properties\WorkLocationProperty;
use NilPortugues\SchemaOrg\Properties\WorksForProperty;

/**
 * Classes Person.
 */
class Person
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Person';

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
    public static function additionalName()
    {
        return AdditionalNameProperty::create(self::schemaUrl());
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
    public static function affiliation()
    {
        return AffiliationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alumniOf()
    {
        return AlumniOfProperty::create(self::schemaUrl());
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
    public static function birthDate()
    {
        return BirthDateProperty::create(self::schemaUrl());
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
    public static function children()
    {
        return ChildrenProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function colleague()
    {
        return ColleagueProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function colleagues()
    {
        return ColleaguesProperty::create(self::schemaUrl());
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
    public static function deathDate()
    {
        return DeathDateProperty::create(self::schemaUrl());
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
    public static function familyName()
    {
        return FamilyNameProperty::create(self::schemaUrl());
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
    public static function follows()
    {
        return FollowsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function gender()
    {
        return GenderProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function givenName()
    {
        return GivenNameProperty::create(self::schemaUrl());
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
    public static function height()
    {
        return HeightProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function homeLocation()
    {
        return HomeLocationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function honorificPrefix()
    {
        return HonorificPrefixProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function honorificSuffix()
    {
        return HonorificSuffixProperty::create(self::schemaUrl());
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
    public static function jobTitle()
    {
        return JobTitleProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function knows()
    {
        return KnowsProperty::create(self::schemaUrl());
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
    public static function memberOf()
    {
        return MemberOfProperty::create(self::schemaUrl());
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
    public static function nationality()
    {
        return NationalityProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function netWorth()
    {
        return NetWorthProperty::create(self::schemaUrl());
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
    public static function parent()
    {
        return ParentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function parents()
    {
        return ParentsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function performerIn()
    {
        return PerformerInProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function relatedTo()
    {
        return RelatedToProperty::create(self::schemaUrl());
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
    public static function sibling()
    {
        return SiblingProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function siblings()
    {
        return SiblingsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function spouse()
    {
        return SpouseProperty::create(self::schemaUrl());
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

    /**
     * @return Mapping
     */
    public static function weight()
    {
        return WeightProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function workLocation()
    {
        return WorkLocationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function worksFor()
    {
        return WorksForProperty::create(self::schemaUrl());
    }
}
