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
use NilPortugues\SchemaOrg\Properties\DateIssuedProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\IssuedByProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\PriceCurrencyProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\TicketNumberProperty;
use NilPortugues\SchemaOrg\Properties\TicketTokenProperty;
use NilPortugues\SchemaOrg\Properties\TicketedSeatProperty;
use NilPortugues\SchemaOrg\Properties\TotalPriceProperty;
use NilPortugues\SchemaOrg\Properties\UnderNameProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;

/**
 * Classes Ticket.
 */
class Ticket
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Ticket';

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
    public static function dateIssued()
    {
        return DateIssuedProperty::create(self::schemaUrl());
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
    public static function issuedBy()
    {
        return IssuedByProperty::create(self::schemaUrl());
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
    public static function priceCurrency()
    {
        return PriceCurrencyProperty::create(self::schemaUrl());
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
    public static function ticketNumber()
    {
        return TicketNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function ticketToken()
    {
        return TicketTokenProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function ticketedSeat()
    {
        return TicketedSeatProperty::create(self::schemaUrl());
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
