<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ActionStatusType
 * @package NilPortugues\SchemaOrg\Classes
 *
 * The status of an Action.
 */
class ActionStatusType
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/ActionStatusType";

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