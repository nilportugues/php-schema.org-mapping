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
 * @method static \NilPortugues\SchemaOrg\Properties\ProviderProperty provider()
 * @method static \NilPortugues\SchemaOrg\Properties\DepartureTimeProperty departureTime()
 * @method static \NilPortugues\SchemaOrg\Properties\ArrivalTimeProperty arrivalTime()
 * @method static \NilPortugues\SchemaOrg\Properties\TrainNumberProperty trainNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\TrainNameProperty trainName()
 * @method static \NilPortugues\SchemaOrg\Properties\DepartureStationProperty departureStation()
 * @method static \NilPortugues\SchemaOrg\Properties\ArrivalStationProperty arrivalStation()
 * @method static \NilPortugues\SchemaOrg\Properties\DeparturePlatformProperty departurePlatform()
 * @method static \NilPortugues\SchemaOrg\Properties\ArrivalPlatformProperty arrivalPlatform()
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
 * A trip on a commercial train line.
 */
class TrainTrip extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/TrainTrip';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'arrivalPlatform' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ArrivalPlatformProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TrainTrip',
        ],
        'arrivalStation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ArrivalStationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TrainTrip',
        ],
        'arrivalTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ArrivalTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TrainTrip',
        ],
        'departurePlatform' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DeparturePlatformProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TrainTrip',
        ],
        'departureStation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DepartureStationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TrainTrip',
        ],
        'departureTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DepartureTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TrainTrip',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
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
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'provider' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProviderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TrainTrip',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'trainName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TrainNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TrainTrip',
        ],
        'trainNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TrainNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TrainTrip',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
