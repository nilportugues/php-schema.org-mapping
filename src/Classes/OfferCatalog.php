<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OfferCatalog
 * @package NilPortugues\SchemaOrg\Classes
 *
 * An OfferCatalog is an ItemList that contains related Offers and/or further OfferCatalogs that are offeredBy the same provider.
 */
class OfferCatalog
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/OfferCatalog";

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