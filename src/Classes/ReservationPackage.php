<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\SubReservation;

/**
 * Classes ReservationPackage
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A group of multiple reservations with common values for all sub-reservations.
 */
class ReservationPackage
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/ReservationPackage";

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
    public static function subReservation()
    {
        return SubReservation::create(self::schemaUrl());
    }
}