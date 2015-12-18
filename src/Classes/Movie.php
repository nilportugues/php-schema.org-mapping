<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\Actor;
use NilPortugues\SchemaOrg\Properties\Actors;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\CountryOfOrigin;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Director;
use NilPortugues\SchemaOrg\Properties\Directors;
use NilPortugues\SchemaOrg\Properties\Duration;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\MusicBy;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\ProductionCompany;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\SubtitleLanguage;
use NilPortugues\SchemaOrg\Properties\Trailer;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes Movie
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A movie.
 */
class Movie
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Movie";

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
    public static function countryOfOrigin()
    {
        return CountryOfOrigin::create(self::schemaUrl());
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
    public static function duration()
    {
        return Duration::create(self::schemaUrl());
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
    public static function subtitleLanguage()
    {
        return SubtitleLanguage::create(self::schemaUrl());
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