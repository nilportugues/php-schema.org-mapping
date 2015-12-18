<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes GovernmentPermit.
 */
class GovernmentPermit
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/GovernmentPermit';

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
