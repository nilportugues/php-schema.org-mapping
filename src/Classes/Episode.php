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
 * @method static \NilPortugues\SchemaOrg\Properties\ActorsProperty actors()
 * @method static \NilPortugues\SchemaOrg\Properties\DirectorProperty director()
 * @method static \NilPortugues\SchemaOrg\Properties\DirectorsProperty directors()
 * @method static \NilPortugues\SchemaOrg\Properties\EpisodeNumberProperty episodeNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\MusicByProperty musicBy()
 * @method static \NilPortugues\SchemaOrg\Properties\PartOfSeasonProperty partOfSeason()
 * @method static \NilPortugues\SchemaOrg\Properties\PartOfSeriesProperty partOfSeries()
 * @method static \NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty productionCompany()
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
 * A media episode (e.g. TV, radio, video game) which can be part of a series or season.
 */
class Episode extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Episode';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'actor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Episode',
        ],
        'actors' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActorsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Episode',
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
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Episode',
        ],
        'directors' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DirectorsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Episode',
        ],
        'episodeNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EpisodeNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Episode',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'musicBy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MusicByProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Episode',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'partOfSeason' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PartOfSeasonProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Episode',
        ],
        'partOfSeries' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PartOfSeriesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Episode',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'productionCompany' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Episode',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'trailer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TrailerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Episode',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
