<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\PartySizeProperty;
use NilPortugues\SchemaOrg\Properties\PickupLocationProperty;
use NilPortugues\SchemaOrg\Properties\PickupTimeProperty;

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
        return PartySizeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pickupLocation()
    {
        return PickupLocationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pickupTime()
    {
        return PickupTimeProperty::create(self::schemaUrl());
    }
}
