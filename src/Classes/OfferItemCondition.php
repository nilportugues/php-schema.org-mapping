<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OfferItemCondition
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A list of possible conditions for the item.
 */
class OfferItemCondition
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/OfferItemCondition";

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