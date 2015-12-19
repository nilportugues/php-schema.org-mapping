<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\BookingAgentProperty;
use NilPortugues\SchemaOrg\Properties\BookingTimeProperty;
use NilPortugues\SchemaOrg\Properties\BrokerProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\ModifiedTimeProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\PriceCurrencyProperty;
use NilPortugues\SchemaOrg\Properties\ProgramMembershipUsedProperty;
use NilPortugues\SchemaOrg\Properties\ProviderProperty;
use NilPortugues\SchemaOrg\Properties\ReservationForProperty;
use NilPortugues\SchemaOrg\Properties\ReservationIdProperty;
use NilPortugues\SchemaOrg\Properties\ReservationStatusProperty;
use NilPortugues\SchemaOrg\Properties\ReservedTicketProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\TotalPriceProperty;
use NilPortugues\SchemaOrg\Properties\UnderNameProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes Reservation.
 */
class Reservation extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Reservation';

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
    public static function bookingAgent()
    {
        return BookingAgentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function bookingTime()
    {
        return BookingTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function broker()
    {
        return BrokerProperty::create(self::schemaUrl());
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
    public static function modifiedTime()
    {
        return ModifiedTimeProperty::create(self::schemaUrl());
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
    public static function priceCurrency()
    {
        return PriceCurrencyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function programMembershipUsed()
    {
        return ProgramMembershipUsedProperty::create(self::schemaUrl());
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
    public static function reservationFor()
    {
        return ReservationForProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reservationId()
    {
        return ReservationIdProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reservationStatus()
    {
        return ReservationStatusProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reservedTicket()
    {
        return ReservedTicketProperty::create(self::schemaUrl());
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
    public static function totalPrice()
    {
        return TotalPriceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function underName()
    {
        return UnderNameProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
