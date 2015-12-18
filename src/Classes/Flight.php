<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\Aircraft;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\ArrivalAirport;
use NilPortugues\SchemaOrg\Properties\ArrivalGate;
use NilPortugues\SchemaOrg\Properties\ArrivalTerminal;
use NilPortugues\SchemaOrg\Properties\ArrivalTime;
use NilPortugues\SchemaOrg\Properties\BoardingPolicy;
use NilPortugues\SchemaOrg\Properties\Carrier;
use NilPortugues\SchemaOrg\Properties\DepartureAirport;
use NilPortugues\SchemaOrg\Properties\DepartureGate;
use NilPortugues\SchemaOrg\Properties\DepartureTerminal;
use NilPortugues\SchemaOrg\Properties\DepartureTime;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\EstimatedFlightDuration;
use NilPortugues\SchemaOrg\Properties\FlightDistance;
use NilPortugues\SchemaOrg\Properties\FlightNumber;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\MealService;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\Provider;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Seller;
use NilPortugues\SchemaOrg\Properties\Url;
use NilPortugues\SchemaOrg\Properties\WebCheckinTime;

/**
 * Classes Flight
 * @package NilPortugues\SchemaOrg\Classes
 *
 * An airline flight.
 */
class Flight
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Flight";

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
    public static function additionalType()
    {
        return AdditionalType::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function aircraft()
    {
        return Aircraft::create(self::schemaUrl());
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
    public static function arrivalAirport()
    {
        return ArrivalAirport::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function arrivalGate()
    {
        return ArrivalGate::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function arrivalTerminal()
    {
        return ArrivalTerminal::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function arrivalTime()
    {
        return ArrivalTime::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function boardingPolicy()
    {
        return BoardingPolicy::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function carrier()
    {
        return Carrier::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function departureAirport()
    {
        return DepartureAirport::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function departureGate()
    {
        return DepartureGate::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function departureTerminal()
    {
        return DepartureTerminal::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function departureTime()
    {
        return DepartureTime::create(self::schemaUrl());
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
    public static function estimatedFlightDuration()
    {
        return EstimatedFlightDuration::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function flightDistance()
    {
        return FlightDistance::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function flightNumber()
    {
        return FlightNumber::create(self::schemaUrl());
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
    public static function mealService()
    {
        return MealService::create(self::schemaUrl());
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
    public static function provider()
    {
        return Provider::create(self::schemaUrl());
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
    public static function seller()
    {
        return Seller::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function webCheckinTime()
    {
        return WebCheckinTime::create(self::schemaUrl());
    }
}