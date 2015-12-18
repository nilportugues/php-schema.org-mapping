<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\Address;
use NilPortugues\SchemaOrg\Properties\AddressCountry;
use NilPortugues\SchemaOrg\Properties\Elevation;
use NilPortugues\SchemaOrg\Properties\Latitude;
use NilPortugues\SchemaOrg\Properties\Longitude;
use NilPortugues\SchemaOrg\Properties\PostalCode;

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
        return Address::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function addressCountry()
    {
        return AddressCountry::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function elevation()
    {
        return Elevation::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function latitude()
    {
        return Latitude::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function longitude()
    {
        return Longitude::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function postalCode()
    {
        return PostalCode::create(self::schemaUrl());
    }
}
