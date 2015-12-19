<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AddressCountryProperty;
use NilPortugues\SchemaOrg\Properties\AddressProperty;
use NilPortugues\SchemaOrg\Properties\ElevationProperty;
use NilPortugues\SchemaOrg\Properties\LatitudeProperty;
use NilPortugues\SchemaOrg\Properties\LongitudeProperty;
use NilPortugues\SchemaOrg\Properties\PostalCodeProperty;

/**
 * Classes GeoCoordinates.
 */
class GeoCoordinates
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/GeoCoordinates';

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
    public static function address()
    {
        return AddressProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function addressCountry()
    {
        return AddressCountryProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function elevation()
    {
        return ElevationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function latitude()
    {
        return LatitudeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function longitude()
    {
        return LongitudeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function postalCode()
    {
        return PostalCodeProperty::create(self::schemaUrl());
    }
}
