<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GovernmentPermit
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A permit issued by a government agency.
 */
class GovernmentPermit
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/GovernmentPermit";

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