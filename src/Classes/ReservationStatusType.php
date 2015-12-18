<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes ReservationStatusType.
 */
class ReservationStatusType
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/ReservationStatusType';

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
