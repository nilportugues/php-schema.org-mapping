<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes BoardingPolicyType.
 */
class BoardingPolicyType
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/BoardingPolicyType';

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
