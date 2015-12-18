<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AcquiredFrom;
use NilPortugues\SchemaOrg\Properties\OwnedFrom;
use NilPortugues\SchemaOrg\Properties\OwnedThrough;
use NilPortugues\SchemaOrg\Properties\TypeOfGood;

/**
 * Classes OwnershipInfo
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A structured value providing information about when a certain organization or person owned a certain product.
 */
class OwnershipInfo
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/OwnershipInfo";

   /**
    * Returns the URL of the current definition at http://schema.org
    *
    * @return string
    */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

   /**
    * @return Mapping
    */
    public static function acquiredFrom()
    {
        return AcquiredFrom::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function ownedFrom()
    {
        return OwnedFrom::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function ownedThrough()
    {
        return OwnedThrough::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function typeOfGood()
    {
        return TypeOfGood::create(self::schemaUrl());
    }
}