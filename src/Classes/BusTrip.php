<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\ArrivalBusStop;
use NilPortugues\SchemaOrg\Properties\ArrivalTime;
use NilPortugues\SchemaOrg\Properties\BusName;
use NilPortugues\SchemaOrg\Properties\BusNumber;
use NilPortugues\SchemaOrg\Properties\DepartureBusStop;
use NilPortugues\SchemaOrg\Properties\DepartureTime;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\Provider;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Url;

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
        return AdditionalType::create(Thing::schemaUrl());
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
    public static function arrivalBusStop()
    {
        return ArrivalBusStop::create(self::schemaUrl());
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
    public static function busName()
    {
        return BusName::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function busNumber()
    {
        return BusNumber::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function departureBusStop()
    {
        return DepartureBusStop::create(self::schemaUrl());
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
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}
