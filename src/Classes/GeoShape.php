<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AddressCountryProperty;
use NilPortugues\SchemaOrg\Properties\AddressProperty;
use NilPortugues\SchemaOrg\Properties\BoxProperty;
use NilPortugues\SchemaOrg\Properties\CircleProperty;
use NilPortugues\SchemaOrg\Properties\ElevationProperty;
use NilPortugues\SchemaOrg\Properties\LineProperty;
use NilPortugues\SchemaOrg\Properties\PolygonProperty;
use NilPortugues\SchemaOrg\Properties\PostalCodeProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes GeoShape.
 */
class GeoShape extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/GeoShape';

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
    public static function box()
    {
        return BoxProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function circle()
    {
        return CircleProperty::create(self::schemaUrl());
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
    public static function line()
    {
        return LineProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function polygon()
    {
        return PolygonProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function postalCode()
    {
        return PostalCodeProperty::create(self::schemaUrl());
    }
}
