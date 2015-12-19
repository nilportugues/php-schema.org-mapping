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
 * @method static \NilPortugues\SchemaOrg\Properties\CarrierProperty carrier()
 * @method static \NilPortugues\SchemaOrg\Properties\SellerProperty seller()
 * @method static \NilPortugues\SchemaOrg\Properties\ProviderProperty provider()
 * @method static \NilPortugues\SchemaOrg\Properties\FlightNumberProperty flightNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\DepartureTimeProperty departureTime()
 * @method static \NilPortugues\SchemaOrg\Properties\ArrivalTimeProperty arrivalTime()
 * @method static \NilPortugues\SchemaOrg\Properties\DepartureAirportProperty departureAirport()
 * @method static \NilPortugues\SchemaOrg\Properties\ArrivalAirportProperty arrivalAirport()
 * @method static \NilPortugues\SchemaOrg\Properties\DepartureGateProperty departureGate()
 * @method static \NilPortugues\SchemaOrg\Properties\ArrivalGateProperty arrivalGate()
 * @method static \NilPortugues\SchemaOrg\Properties\BoardingPolicyProperty boardingPolicy()
 * @method static \NilPortugues\SchemaOrg\Properties\DepartureTerminalProperty departureTerminal()
 * @method static \NilPortugues\SchemaOrg\Properties\ArrivalTerminalProperty arrivalTerminal()
 * @method static \NilPortugues\SchemaOrg\Properties\AircraftProperty aircraft()
 * @method static \NilPortugues\SchemaOrg\Properties\MealServiceProperty mealService()
 * @method static \NilPortugues\SchemaOrg\Properties\EstimatedFlightDurationProperty estimatedFlightDuration()
 * @method static \NilPortugues\SchemaOrg\Properties\FlightDistanceProperty flightDistance()
 * @method static \NilPortugues\SchemaOrg\Properties\WebCheckinTimeProperty webCheckinTime()
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
 * An airline flight.
 */
class Flight extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Flight';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'aircraft' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AircraftProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'arrivalAirport' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ArrivalAirportProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'arrivalGate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ArrivalGateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'arrivalTerminal' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ArrivalTerminalProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'arrivalTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ArrivalTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'boardingPolicy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BoardingPolicyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'carrier' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CarrierProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'departureAirport' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DepartureAirportProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'departureGate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DepartureGateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'departureTerminal' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DepartureTerminalProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'departureTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DepartureTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'estimatedFlightDuration' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EstimatedFlightDurationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'flightDistance' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FlightDistanceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'flightNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FlightNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mealService' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MealServiceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
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
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'seller' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SellerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'webCheckinTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WebCheckinTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Flight',
        ],
    ];
}
