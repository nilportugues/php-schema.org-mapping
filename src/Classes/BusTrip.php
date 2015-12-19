<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\ArrivalBusStopProperty;
use NilPortugues\SchemaOrg\Properties\ArrivalTimeProperty;
use NilPortugues\SchemaOrg\Properties\BusNameProperty;
use NilPortugues\SchemaOrg\Properties\BusNumberProperty;
use NilPortugues\SchemaOrg\Properties\DepartureBusStopProperty;
use NilPortugues\SchemaOrg\Properties\DepartureTimeProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ProviderProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;

/**
 * Classes BusTrip.
 */
class BusTrip
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/BusTrip';

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
    public static function additionalType()
    {
        return AdditionalTypeProperty::create(Thing::schemaUrl());
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
    public static function arrivalBusStop()
    {
        return ArrivalBusStopProperty::create(self::schemaUrl());
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
    public static function busName()
    {
        return BusNameProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function busNumber()
    {
        return BusNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function departureBusStop()
    {
        return DepartureBusStopProperty::create(self::schemaUrl());
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
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
