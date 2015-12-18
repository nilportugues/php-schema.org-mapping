<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes SportsTeam.
 */
class SportsTeam
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/SportsTeam';

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
