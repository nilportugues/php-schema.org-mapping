<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\CheckinTimeProperty;
use NilPortugues\SchemaOrg\Properties\CheckoutTimeProperty;
use NilPortugues\SchemaOrg\Properties\LodgingUnitDescriptionProperty;
use NilPortugues\SchemaOrg\Properties\LodgingUnitTypeProperty;
use NilPortugues\SchemaOrg\Properties\NumAdultsProperty;
use NilPortugues\SchemaOrg\Properties\NumChildrenProperty;

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
        return CheckinTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function checkoutTime()
    {
        return CheckoutTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function lodgingUnitDescription()
    {
        return LodgingUnitDescriptionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function lodgingUnitType()
    {
        return LodgingUnitTypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function numAdults()
    {
        return NumAdultsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function numChildren()
    {
        return NumChildrenProperty::create(self::schemaUrl());
    }
}
