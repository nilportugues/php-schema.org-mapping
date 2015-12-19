<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ActorProperty;
use NilPortugues\SchemaOrg\Properties\ActorsProperty;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\DirectorProperty;
use NilPortugues\SchemaOrg\Properties\DirectorsProperty;
use NilPortugues\SchemaOrg\Properties\EpisodeNumberProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\MusicByProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PartOfSeasonProperty;
use NilPortugues\SchemaOrg\Properties\PartOfSeriesProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\TrailerProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;

/**
 * Classes Episode.
 */
class Episode
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Episode';

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
    public static function actor()
    {
        return ActorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function actors()
    {
        return ActorsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function additionalType()
    {
        return AdditionalTypeProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternateName()
    {
        return AlternateNameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function description()
    {
        return DescriptionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function director()
    {
        return DirectorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function directors()
    {
        return DirectorsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function episodeNumber()
    {
        return EpisodeNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function musicBy()
    {
        return MusicByProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function name()
    {
        return NameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function partOfSeason()
    {
        return PartOfSeasonProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function partOfSeries()
    {
        return PartOfSeriesProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function potentialAction()
    {
        return PotentialActionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function productionCompany()
    {
        return ProductionCompanyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sameAs()
    {
        return SameAsProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function trailer()
    {
        return TrailerProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
