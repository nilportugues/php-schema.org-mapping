<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PaymentMethod
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A payment method is a standardized procedure for transferring the monetary amount for a purchase. Payment methods are characterized by the legal and technical structures used, and by the organization or group carrying out the transaction.

    Commonly used values:

    http://purl.org/goodrelations/v1#ByBankTransferInAdvance 
    http://purl.org/goodrelations/v1#ByInvoice 
    http://purl.org/goodrelations/v1#Cash 
    http://purl.org/goodrelations/v1#CheckInAdvance 
    http://purl.org/goodrelations/v1#COD 
    http://purl.org/goodrelations/v1#DirectDebit 
    http://purl.org/goodrelations/v1#GoogleCheckout 
    http://purl.org/goodrelations/v1#PayPal 
    http://purl.org/goodrelations/v1#PaySwarm 
        
 */
class PaymentMethod
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/PaymentMethod";

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