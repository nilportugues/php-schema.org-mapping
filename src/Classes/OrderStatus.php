<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes OrderStatus.
 */
class OrderStatus
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/OrderStatus';

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
