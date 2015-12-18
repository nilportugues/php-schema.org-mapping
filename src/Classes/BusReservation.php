<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes BusReservation.
 */
class BusReservation
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/BusReservation';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }
}
