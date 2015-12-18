<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DeliveryMethod
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A delivery method is a standardized procedure for transferring the product or service to the destination of fulfillment chosen by the customer. Delivery methods are characterized by the means of transportation used, and by the organization or group that is the contracting party for the sending organization or person.

    Commonly used values:

    http://purl.org/goodrelations/v1#DeliveryModeDirectDownload 
    http://purl.org/goodrelations/v1#DeliveryModeFreight 
    http://purl.org/goodrelations/v1#DeliveryModeMail 
    http://purl.org/goodrelations/v1#DeliveryModeOwnFleet 
    http://purl.org/goodrelations/v1#DeliveryModePickUp 
    http://purl.org/goodrelations/v1#DHL 
    http://purl.org/goodrelations/v1#FederalExpress 
    http://purl.org/goodrelations/v1#UPS 
        
 */
class DeliveryMethod
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/DeliveryMethod";

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