<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BoardingPolicyType
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A type of boarding policy used by an airline.
 */
class BoardingPolicyType
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/BoardingPolicyType";

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