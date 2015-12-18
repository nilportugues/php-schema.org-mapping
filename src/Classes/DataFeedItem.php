<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\DateCreated;
use NilPortugues\SchemaOrg\Properties\DateDeleted;
use NilPortugues\SchemaOrg\Properties\DateModified;
use NilPortugues\SchemaOrg\Properties\Item;

/**
 * Classes DataFeedItem
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A single item within a larger data feed.
 */
class DataFeedItem
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/DataFeedItem";

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
    public static function dateCreated()
    {
        return DateCreated::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function dateDeleted()
    {
        return DateDeleted::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function dateModified()
    {
        return DateModified::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function item()
    {
        return Item::create(self::schemaUrl());
    }
}