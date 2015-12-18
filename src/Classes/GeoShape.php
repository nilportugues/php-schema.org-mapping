<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\Address;
use NilPortugues\SchemaOrg\Properties\AddressCountry;
use NilPortugues\SchemaOrg\Properties\Box;
use NilPortugues\SchemaOrg\Properties\Circle;
use NilPortugues\SchemaOrg\Properties\Elevation;
use NilPortugues\SchemaOrg\Properties\Line;
use NilPortugues\SchemaOrg\Properties\Polygon;
use NilPortugues\SchemaOrg\Properties\PostalCode;

/**
 * Classes GeoShape.
 */
class GeoShape
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/GeoShape';

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
    public static function box()
    {
        return Box::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function circle()
    {
        return Circle::create(self::schemaUrl());
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
    public static function line()
    {
        return Line::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function polygon()
    {
        return Polygon::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function postalCode()
    {
        return PostalCode::create(self::schemaUrl());
    }
}
