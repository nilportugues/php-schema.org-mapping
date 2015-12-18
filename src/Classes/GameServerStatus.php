<?php

namespace NilPortugues\SchemaOrg\Classes;

/**
 * Classes GameServerStatus.
 */
class GameServerStatus
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/GameServerStatus';

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
