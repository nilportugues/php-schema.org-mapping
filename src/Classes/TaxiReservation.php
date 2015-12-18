<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\PartySize;
use NilPortugues\SchemaOrg\Properties\PickupLocation;
use NilPortugues\SchemaOrg\Properties\PickupTime;

/**
 * Classes TaxiReservation.
 */
class TaxiReservation
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/TaxiReservation';

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
    public static function partySize()
    {
        return PartySize::create(self::schemaUrl());
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
