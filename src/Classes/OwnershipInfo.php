<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AcquiredFromProperty;
use NilPortugues\SchemaOrg\Properties\OwnedFromProperty;
use NilPortugues\SchemaOrg\Properties\OwnedThroughProperty;
use NilPortugues\SchemaOrg\Properties\TypeOfGoodProperty;

/**
 * Classes OwnershipInfo.
 */
class OwnershipInfo
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/OwnershipInfo';

    /**
     * Returns the URL of the current definition at http://schema.org.
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
        return AcquiredFromProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function ownedFrom()
    {
        return OwnedFromProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function ownedThrough()
    {
        return OwnedThroughProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function typeOfGood()
    {
        return TypeOfGoodProperty::create(self::schemaUrl());
    }
}
