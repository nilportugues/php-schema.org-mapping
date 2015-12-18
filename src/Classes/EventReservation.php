<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes EventReservation.
 */
class EventReservation
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/EventReservation';

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
