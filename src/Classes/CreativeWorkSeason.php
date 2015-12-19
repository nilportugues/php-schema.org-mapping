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

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\ActorProperty actor()
 * @method static \NilPortugues\SchemaOrg\Properties\DirectorProperty director()
 * @method static \NilPortugues\SchemaOrg\Properties\EndDateProperty endDate()
 * @method static \NilPortugues\SchemaOrg\Properties\EpisodeProperty episode()
 * @method static \NilPortugues\SchemaOrg\Properties\EpisodesProperty episodes()
 * @method static \NilPortugues\SchemaOrg\Properties\NumberOfEpisodesProperty numberOfEpisodes()
 * @method static \NilPortugues\SchemaOrg\Properties\PartOfSeriesProperty partOfSeries()
 * @method static \NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty productionCompany()
 * @method static \NilPortugues\SchemaOrg\Properties\SeasonNumberProperty seasonNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\StartDateProperty startDate()
 * @method static \NilPortugues\SchemaOrg\Properties\TrailerProperty trailer()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * METHODEND.
 *
 * A media season e.g. tv, radio, video game etc.
 */
class CreativeWorkSeason extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/CreativeWorkSeason';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'actor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWorkSeason',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'director' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DirectorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWorkSeason',
        ],
        'endDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EndDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWorkSeason',
        ],
        'episode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EpisodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWorkSeason',
        ],
        'episodes' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EpisodesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWorkSeason',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'numberOfEpisodes' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NumberOfEpisodesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWorkSeason',
        ],
        'partOfSeries' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PartOfSeriesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWorkSeason',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'productionCompany' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWorkSeason',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'seasonNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SeasonNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWorkSeason',
        ],
        'startDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StartDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWorkSeason',
        ],
        'trailer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TrailerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWorkSeason',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
