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
 * @method static \NilPortugues\SchemaOrg\Properties\ClipNumberProperty clipNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\DirectorProperty director()
 * @method static \NilPortugues\SchemaOrg\Properties\DirectorsProperty directors()
 * @method static \NilPortugues\SchemaOrg\Properties\MusicByProperty musicBy()
 * @method static \NilPortugues\SchemaOrg\Properties\PartOfEpisodeProperty partOfEpisode()
 * @method static \NilPortugues\SchemaOrg\Properties\PartOfSeasonProperty partOfSeason()
 * @method static \NilPortugues\SchemaOrg\Properties\PartOfSeriesProperty partOfSeries()
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
 * A short TV or radio program or a segment/part of a program.
 */
class Clip extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Clip';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'actor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Clip',
        ],
        'actors' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActorsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Clip',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'clipNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ClipNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Clip',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'director' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DirectorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Clip',
        ],
        'directors' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DirectorsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Clip',
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
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Clip',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'partOfEpisode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PartOfEpisodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Clip',
        ],
        'partOfSeason' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PartOfSeasonProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Clip',
        ],
        'partOfSeries' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PartOfSeriesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Clip',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
