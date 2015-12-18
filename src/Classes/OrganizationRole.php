<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OrganizationRole
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A subclass of Role used to describe roles within organizations.
 */
class OrganizationRole
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/OrganizationRole";

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