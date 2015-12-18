<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\DateIssued;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\IssuedBy;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\PriceCurrency;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\TicketNumber;
use NilPortugues\SchemaOrg\Properties\TicketToken;
use NilPortugues\SchemaOrg\Properties\TicketedSeat;
use NilPortugues\SchemaOrg\Properties\TotalPrice;
use NilPortugues\SchemaOrg\Properties\UnderName;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes Ticket
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 */
class Ticket
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Ticket";

   /**
    * Returns the URL of the current definition at http://schema.org
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
    public static function dateIssued()
    {
        return DateIssued::create(self::schemaUrl());
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
    public static function issuedBy()
    {
        return IssuedBy::create(self::schemaUrl());
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
    public static function priceCurrency()
    {
        return PriceCurrency::create(self::schemaUrl());
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
    public static function ticketNumber()
    {
        return TicketNumber::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function ticketToken()
    {
        return TicketToken::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function ticketedSeat()
    {
        return TicketedSeat::create(self::schemaUrl());
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