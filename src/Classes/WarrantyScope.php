<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes WarrantyScope
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A range of of services that will be provided to a customer free of charge in case of a defect or malfunction of a product.

    Commonly used values:

    http://purl.org/goodrelations/v1#Labor-BringIn 
    http://purl.org/goodrelations/v1#PartsAndLabor-BringIn 
    http://purl.org/goodrelations/v1#PartsAndLabor-PickUp 
      
 */
class WarrantyScope
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/WarrantyScope";

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