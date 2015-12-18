<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GameServerStatus
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Status of a game server.
 */
class GameServerStatus
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/GameServerStatus";

   /**
    * Returns the URL of the current definition at http://schema.org
    *
    * @return string
    */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }


}