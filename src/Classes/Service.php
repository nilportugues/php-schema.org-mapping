<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AggregateRating;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\AreaServed;
use NilPortugues\SchemaOrg\Properties\AvailableChannel;
use NilPortugues\SchemaOrg\Properties\Award;
use NilPortugues\SchemaOrg\Properties\Category;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\HasOfferCatalog;
use NilPortugues\SchemaOrg\Properties\HoursAvailable;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\Offers;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\Produces;
use NilPortugues\SchemaOrg\Properties\Provider;
use NilPortugues\SchemaOrg\Properties\ProviderMobility;
use NilPortugues\SchemaOrg\Properties\Review;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\ServiceArea;
use NilPortugues\SchemaOrg\Properties\ServiceAudience;
use NilPortugues\SchemaOrg\Properties\ServiceOutput;
use NilPortugues\SchemaOrg\Properties\ServiceType;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes Service
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A service provided by an organization, e.g. delivery service, print services, etc.
 */
class Service
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Service";

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
    public static function additionalType()
    {
        return AdditionalType::create(Thing::schemaUrl());
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
    public static function alternateName()
    {
        return AlternateName::create(Thing::schemaUrl());
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
    public static function availableChannel()
    {
        return AvailableChannel::create(self::schemaUrl());
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
    public static function category()
    {
        return Category::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function description()
    {
        return Description::create(Thing::schemaUrl());
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
    public static function hoursAvailable()
    {
        return HoursAvailable::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function image()
    {
        return Image::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPage::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function name()
    {
        return Name::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function offers()
    {
        return Offers::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function potentialAction()
    {
        return PotentialAction::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function produces()
    {
        return Produces::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function provider()
    {
        return Provider::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function providerMobility()
    {
        return ProviderMobility::create(self::schemaUrl());
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
    public static function sameAs()
    {
        return SameAs::create(Thing::schemaUrl());
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
    public static function serviceAudience()
    {
        return ServiceAudience::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function serviceOutput()
    {
        return ServiceOutput::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function serviceType()
    {
        return ServiceType::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}