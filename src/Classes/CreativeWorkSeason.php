<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\Actor;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Director;
use NilPortugues\SchemaOrg\Properties\EndDate;
use NilPortugues\SchemaOrg\Properties\Episode;
use NilPortugues\SchemaOrg\Properties\Episodes;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\NumberOfEpisodes;
use NilPortugues\SchemaOrg\Properties\PartOfSeries;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\ProductionCompany;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\SeasonNumber;
use NilPortugues\SchemaOrg\Properties\StartDate;
use NilPortugues\SchemaOrg\Properties\Trailer;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes CreativeWorkSeason
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A media season e.g. tv, radio, video game etc.
 */
class CreativeWorkSeason
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/CreativeWorkSeason";

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
    public static function actor()
    {
        return Actor::create(self::schemaUrl());
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
    public static function alternateName()
    {
        return AlternateName::create(Thing::schemaUrl());
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
    public static function director()
    {
        return Director::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function endDate()
    {
        return EndDate::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function episode()
    {
        return Episode::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function episodes()
    {
        return Episodes::create(self::schemaUrl());
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
    public static function numberOfEpisodes()
    {
        return NumberOfEpisodes::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function partOfSeries()
    {
        return PartOfSeries::create(self::schemaUrl());
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
    public static function productionCompany()
    {
        return ProductionCompany::create(self::schemaUrl());
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
    public static function seasonNumber()
    {
        return SeasonNumber::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function startDate()
    {
        return StartDate::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function trailer()
    {
        return Trailer::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}