<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\BoardingGroup;
use NilPortugues\SchemaOrg\Properties\PassengerPriorityStatus;
use NilPortugues\SchemaOrg\Properties\PassengerSequenceNumber;
use NilPortugues\SchemaOrg\Properties\SecurityScreening;

/**
 * Classes FlightReservation
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A reservation for air travel.Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use http://schema.org/Offer.
 */
class FlightReservation
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/FlightReservation";

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
    public static function boardingGroup()
    {
        return BoardingGroup::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function passengerPriorityStatus()
    {
        return PassengerPriorityStatus::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function passengerSequenceNumber()
    {
        return PassengerSequenceNumber::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function securityScreening()
    {
        return SecurityScreening::create(self::schemaUrl());
    }
}