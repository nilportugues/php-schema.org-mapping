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

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\ReservationIdProperty reservationId()
 * @method static \NilPortugues\SchemaOrg\Properties\ReservationStatusProperty reservationStatus()
 * @method static \NilPortugues\SchemaOrg\Properties\ReservationForProperty reservationFor()
 * @method static \NilPortugues\SchemaOrg\Properties\UnderNameProperty underName()
 * @method static \NilPortugues\SchemaOrg\Properties\ProviderProperty provider()
 * @method static \NilPortugues\SchemaOrg\Properties\BookingAgentProperty bookingAgent()
 * @method static \NilPortugues\SchemaOrg\Properties\BookingTimeProperty bookingTime()
 * @method static \NilPortugues\SchemaOrg\Properties\ModifiedTimeProperty modifiedTime()
 * @method static \NilPortugues\SchemaOrg\Properties\ProgramMembershipUsedProperty programMembershipUsed()
 * @method static \NilPortugues\SchemaOrg\Properties\ReservedTicketProperty reservedTicket()
 * @method static \NilPortugues\SchemaOrg\Properties\TotalPriceProperty totalPrice()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceCurrencyProperty priceCurrency()
 * @method static \NilPortugues\SchemaOrg\Properties\BrokerProperty broker()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * METHODEND.
 *
 * Describes a reservation for travel, dining or an event. Some reservations require tickets.Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, restaurant reservations, flights, or rental cars, use http://schema.org/Offer.
 */
class Reservation extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Reservation';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'bookingAgent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BookingAgentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Reservation',
        ],
        'bookingTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BookingTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Reservation',
        ],
        'broker' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BrokerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Reservation',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'modifiedTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ModifiedTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Reservation',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'priceCurrency' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceCurrencyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Reservation',
        ],
        'programMembershipUsed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProgramMembershipUsedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Reservation',
        ],
        'provider' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProviderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Reservation',
        ],
        'reservationFor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReservationForProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Reservation',
        ],
        'reservationId' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReservationIdProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Reservation',
        ],
        'reservationStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReservationStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Reservation',
        ],
        'reservedTicket' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReservedTicketProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Reservation',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'totalPrice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TotalPriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Reservation',
        ],
        'underName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UnderNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Reservation',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
