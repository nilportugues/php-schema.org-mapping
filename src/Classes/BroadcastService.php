<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\Area;
use NilPortugues\SchemaOrg\Properties\Broadcaster;
use NilPortugues\SchemaOrg\Properties\ParentService;
use NilPortugues\SchemaOrg\Properties\VideoFormat;

/**
 * Classes BroadcastService
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A delivery service through which content is provided via broadcast over the air or online.
 */
class BroadcastService
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/BroadcastService";

   /**
    * Returns the URL of the current definition at http://schema.org
    *
    * @return string
    */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

   /**
    * @return Mapping
    */
    public static function area()
    {
        return Area::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function broadcaster()
    {
        return Broadcaster::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function parentService()
    {
        return ParentService::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function videoFormat()
    {
        return VideoFormat::create(self::schemaUrl());
    }
}