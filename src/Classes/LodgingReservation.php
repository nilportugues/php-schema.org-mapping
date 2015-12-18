<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\CheckinTime;
use NilPortugues\SchemaOrg\Properties\CheckoutTime;
use NilPortugues\SchemaOrg\Properties\LodgingUnitDescription;
use NilPortugues\SchemaOrg\Properties\LodgingUnitType;
use NilPortugues\SchemaOrg\Properties\NumAdults;
use NilPortugues\SchemaOrg\Properties\NumChildren;

/**
 * Classes LodgingReservation.
 */
class LodgingReservation
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/LodgingReservation';

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
    public static function checkinTime()
    {
        return CheckinTime::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function checkoutTime()
    {
        return CheckoutTime::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function lodgingUnitDescription()
    {
        return LodgingUnitDescription::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function lodgingUnitType()
    {
        return LodgingUnitType::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function numAdults()
    {
        return NumAdults::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function numChildren()
    {
        return NumChildren::create(self::schemaUrl());
    }
}
