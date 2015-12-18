<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\DropoffLocation;
use NilPortugues\SchemaOrg\Properties\DropoffTime;
use NilPortugues\SchemaOrg\Properties\PickupLocation;
use NilPortugues\SchemaOrg\Properties\PickupTime;

/**
 * Classes RentalCarReservation.
 */
class RentalCarReservation
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/RentalCarReservation';

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
    public static function dropoffLocation()
    {
        return DropoffLocation::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dropoffTime()
    {
        return DropoffTime::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pickupLocation()
    {
        return PickupLocation::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pickupTime()
    {
        return PickupTime::create(self::schemaUrl());
    }
}
