<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes TrainReservation.
 */
class TrainReservation
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/TrainReservation';

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
