<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BusReservation
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A reservation for bus travel.Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use http://schema.org/Offer.
 */
class BusReservation
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/BusReservation";

   /**
    * Returns the URL of the current definition at http://schema.org
    *
    * @return string
    */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }


}