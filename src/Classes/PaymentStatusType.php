<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes PaymentStatusType.
 */
class PaymentStatusType
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/PaymentStatusType';

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
