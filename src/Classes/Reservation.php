<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\BookingAgent;
use NilPortugues\SchemaOrg\Properties\BookingTime;
use NilPortugues\SchemaOrg\Properties\Broker;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\ModifiedTime;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\PriceCurrency;
use NilPortugues\SchemaOrg\Properties\ProgramMembershipUsed;
use NilPortugues\SchemaOrg\Properties\Provider;
use NilPortugues\SchemaOrg\Properties\ReservationFor;
use NilPortugues\SchemaOrg\Properties\ReservationId;
use NilPortugues\SchemaOrg\Properties\ReservationStatus;
use NilPortugues\SchemaOrg\Properties\ReservedTicket;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\TotalPrice;
use NilPortugues\SchemaOrg\Properties\UnderName;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes Reservation.
 */
class Reservation
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Reservation';

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
    public static function bookingAgent()
    {
        return BookingAgent::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function bookingTime()
    {
        return BookingTime::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function broker()
    {
        return Broker::create(self::schemaUrl());
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
    public static function modifiedTime()
    {
        return ModifiedTime::create(self::schemaUrl());
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
    public static function priceCurrency()
    {
        return PriceCurrency::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function programMembershipUsed()
    {
        return ProgramMembershipUsed::create(self::schemaUrl());
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
    public static function reservationFor()
    {
        return ReservationFor::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reservationId()
    {
        return ReservationId::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reservationStatus()
    {
        return ReservationStatus::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reservedTicket()
    {
        return ReservedTicket::create(self::schemaUrl());
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
    public static function totalPrice()
    {
        return TotalPrice::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function underName()
    {
        return UnderName::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}
