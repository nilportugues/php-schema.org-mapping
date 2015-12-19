<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\DurationOfWarrantyProperty;
use NilPortugues\SchemaOrg\Properties\WarrantyScopeProperty;

/**
 * Classes WarrantyPromise.
 */
class WarrantyPromise
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/WarrantyPromise';

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
    public static function durationOfWarranty()
    {
        return DurationOfWarrantyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function warrantyScope()
    {
        return WarrantyScopeProperty::create(self::schemaUrl());
    }
}
