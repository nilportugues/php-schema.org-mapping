<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PaymentStatusType
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A specific payment status. For example, PaymentDue, PaymentComplete, etc.
 */
class PaymentStatusType
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/PaymentStatusType";

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