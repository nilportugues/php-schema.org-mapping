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
 * @method static \NilPortugues\SchemaOrg\Properties\CountryOfOriginProperty countryOfOrigin()
 * @method static \NilPortugues\SchemaOrg\Properties\DirectorProperty director()
 * @method static \NilPortugues\SchemaOrg\Properties\DirectorsProperty directors()
 * @method static \NilPortugues\SchemaOrg\Properties\DurationProperty duration()
 * @method static \NilPortugues\SchemaOrg\Properties\MusicByProperty musicBy()
 * @method static \NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty productionCompany()
 * @method static \NilPortugues\SchemaOrg\Properties\SubtitleLanguageProperty subtitleLanguage()
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
 * A movie.
 */
class Movie extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Movie';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'actor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Movie',
        ],
        'actors' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActorsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Movie',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'countryOfOrigin' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CountryOfOriginProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Movie',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'director' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DirectorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Movie',
        ],
        'directors' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DirectorsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Movie',
        ],
        'duration' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DurationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Movie',
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
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Movie',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'productionCompany' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Movie',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'subtitleLanguage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SubtitleLanguageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Movie',
        ],
        'trailer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TrailerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Movie',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
