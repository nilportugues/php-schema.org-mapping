<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ItemListOrderType
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Enumerated for values for itemListOrder for indicating how an ordered ItemList is organized.
 */
class ItemListOrderType
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/ItemListOrderType";

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