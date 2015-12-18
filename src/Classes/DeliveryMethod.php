<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes DeliveryMethod.
 */
class DeliveryMethod
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/DeliveryMethod';

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
