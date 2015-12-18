<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GamePlayMode
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Indicates whether this game is multi-player, co-op or single-player.
 */
class GamePlayMode
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/GamePlayMode";

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