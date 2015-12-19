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
use NilPortugues\SchemaOrg\Properties\ActorProperty;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\DirectorProperty;
use NilPortugues\SchemaOrg\Properties\EndDateProperty;
use NilPortugues\SchemaOrg\Properties\EpisodeProperty;
use NilPortugues\SchemaOrg\Properties\EpisodesProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\NumberOfEpisodesProperty;
use NilPortugues\SchemaOrg\Properties\PartOfSeriesProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\SeasonNumberProperty;
use NilPortugues\SchemaOrg\Properties\StartDateProperty;
use NilPortugues\SchemaOrg\Properties\TrailerProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes CreativeWorkSeason.
 */
class CreativeWorkSeason extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/CreativeWorkSeason';

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
    public static function endDate()
    {
        return EndDateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function episode()
    {
        return EpisodeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function episodes()
    {
        return EpisodesProperty::create(self::schemaUrl());
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
    public static function name()
    {
        return NameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function numberOfEpisodes()
    {
        return NumberOfEpisodesProperty::create(self::schemaUrl());
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
    public static function seasonNumber()
    {
        return SeasonNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function startDate()
    {
        return StartDateProperty::create(self::schemaUrl());
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
