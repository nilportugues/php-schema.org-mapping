<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\Actor;
use NilPortugues\SchemaOrg\Properties\Actors;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Director;
use NilPortugues\SchemaOrg\Properties\Directors;
use NilPortugues\SchemaOrg\Properties\EpisodeNumber;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\MusicBy;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PartOfSeason;
use NilPortugues\SchemaOrg\Properties\PartOfSeries;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\ProductionCompany;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Trailer;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes Episode
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A media episode (e.g. TV, radio, video game) which can be part of a series or season.
 */
class Episode
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Episode";

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
    public static function actors()
    {
        return Actors::create(self::schemaUrl());
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
    public static function directors()
    {
        return Directors::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function episodeNumber()
    {
        return EpisodeNumber::create(self::schemaUrl());
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
    public static function musicBy()
    {
        return MusicBy::create(self::schemaUrl());
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
    public static function partOfSeason()
    {
        return PartOfSeason::create(self::schemaUrl());
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