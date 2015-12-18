<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BusinessEntityType
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A business entity type is a conceptual entity representing the legal form, the size, the main line of business, the position in the value chain, or any combination thereof, of an organization or business person.

    Commonly used values:

    http://purl.org/goodrelations/v1#Business 
    http://purl.org/goodrelations/v1#Enduser 
    http://purl.org/goodrelations/v1#PublicInstitution 
    http://purl.org/goodrelations/v1#Reseller 

        
 */
class BusinessEntityType
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/BusinessEntityType";

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