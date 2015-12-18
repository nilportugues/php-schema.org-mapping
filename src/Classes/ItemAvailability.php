<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ItemAvailability
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A list of possible product availability options.
 */
class ItemAvailability
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/ItemAvailability";

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