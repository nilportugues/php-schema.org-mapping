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
use NilPortugues\SchemaOrg\Properties\ElevationProperty;
use NilPortugues\SchemaOrg\Properties\LatitudeProperty;
use NilPortugues\SchemaOrg\Properties\LongitudeProperty;
use NilPortugues\SchemaOrg\Properties\PostalCodeProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes GeoCoordinates.
 */
class GeoCoordinates extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/GeoCoordinates';

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
