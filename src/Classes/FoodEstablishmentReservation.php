<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\EndTime;
use NilPortugues\SchemaOrg\Properties\PartySize;
use NilPortugues\SchemaOrg\Properties\StartTime;

/**
 * Classes FoodEstablishmentReservation
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A reservation to dine at a food-related business.Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 */
class FoodEstablishmentReservation
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/FoodEstablishmentReservation";

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
    public static function endTime()
    {
        return EndTime::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function partySize()
    {
        return PartySize::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function startTime()
    {
        return StartTime::create(self::schemaUrl());
    }
}