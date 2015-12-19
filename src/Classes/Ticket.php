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
 * @method static \NilPortugues\SchemaOrg\Properties\UnderNameProperty underName()
 * @method static \NilPortugues\SchemaOrg\Properties\TotalPriceProperty totalPrice()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceCurrencyProperty priceCurrency()
 * @method static \NilPortugues\SchemaOrg\Properties\IssuedByProperty issuedBy()
 * @method static \NilPortugues\SchemaOrg\Properties\DateIssuedProperty dateIssued()
 * @method static \NilPortugues\SchemaOrg\Properties\TicketedSeatProperty ticketedSeat()
 * @method static \NilPortugues\SchemaOrg\Properties\TicketNumberProperty ticketNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\TicketTokenProperty ticketToken()
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
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 */
class Ticket extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Ticket';

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
        'dateIssued' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DateIssuedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Ticket',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'issuedBy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IssuedByProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Ticket',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
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
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Ticket',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'ticketNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TicketNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Ticket',
        ],
        'ticketToken' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TicketTokenProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Ticket',
        ],
        'ticketedSeat' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TicketedSeatProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Ticket',
        ],
        'totalPrice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TotalPriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Ticket',
        ],
        'underName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UnderNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Ticket',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
