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
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AircraftProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\ArrivalAirportProperty;
use NilPortugues\SchemaOrg\Properties\ArrivalGateProperty;
use NilPortugues\SchemaOrg\Properties\ArrivalTerminalProperty;
use NilPortugues\SchemaOrg\Properties\ArrivalTimeProperty;
use NilPortugues\SchemaOrg\Properties\BoardingPolicyProperty;
use NilPortugues\SchemaOrg\Properties\CarrierProperty;
use NilPortugues\SchemaOrg\Properties\DepartureAirportProperty;
use NilPortugues\SchemaOrg\Properties\DepartureGateProperty;
use NilPortugues\SchemaOrg\Properties\DepartureTerminalProperty;
use NilPortugues\SchemaOrg\Properties\DepartureTimeProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\EstimatedFlightDurationProperty;
use NilPortugues\SchemaOrg\Properties\FlightDistanceProperty;
use NilPortugues\SchemaOrg\Properties\FlightNumberProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\MealServiceProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ProviderProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\SellerProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\Properties\WebCheckinTimeProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes Flight.
 */
class Flight extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Flight';

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
    public static function aircraft()
    {
        return AircraftProperty::create(self::schemaUrl());
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
    public static function arrivalAirport()
    {
        return ArrivalAirportProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function arrivalGate()
    {
        return ArrivalGateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function arrivalTerminal()
    {
        return ArrivalTerminalProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function arrivalTime()
    {
        return ArrivalTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function boardingPolicy()
    {
        return BoardingPolicyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function carrier()
    {
        return CarrierProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function departureAirport()
    {
        return DepartureAirportProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function departureGate()
    {
        return DepartureGateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function departureTerminal()
    {
        return DepartureTerminalProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function departureTime()
    {
        return DepartureTimeProperty::create(self::schemaUrl());
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
    public static function estimatedFlightDuration()
    {
        return EstimatedFlightDurationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function flightDistance()
    {
        return FlightDistanceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function flightNumber()
    {
        return FlightNumberProperty::create(self::schemaUrl());
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
    public static function mealService()
    {
        return MealServiceProperty::create(self::schemaUrl());
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
    public static function potentialAction()
    {
        return PotentialActionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function provider()
    {
        return ProviderProperty::create(self::schemaUrl());
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
    public static function seller()
    {
        return SellerProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function webCheckinTime()
    {
        return WebCheckinTimeProperty::create(self::schemaUrl());
    }
}
