<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\BoardingGroupProperty;
use NilPortugues\SchemaOrg\Properties\PassengerPriorityStatusProperty;
use NilPortugues\SchemaOrg\Properties\PassengerSequenceNumberProperty;
use NilPortugues\SchemaOrg\Properties\SecurityScreeningProperty;

/**
 * Classes FlightReservation.
 */
class FlightReservation
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/FlightReservation';

    /**
     * Returns the URL of the current definition at http://schema.org.
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
        return BoardingGroupProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function passengerPriorityStatus()
    {
        return PassengerPriorityStatusProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function passengerSequenceNumber()
    {
        return PassengerSequenceNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function securityScreening()
    {
        return SecurityScreeningProperty::create(self::schemaUrl());
    }
}
