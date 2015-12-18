<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes PaymentMethod.
 */
class PaymentMethod
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/PaymentMethod';

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
