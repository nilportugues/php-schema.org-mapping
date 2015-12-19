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

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\AddressProperty address()
 * @method static \NilPortugues\SchemaOrg\Properties\AddressCountryProperty addressCountry()
 * @method static \NilPortugues\SchemaOrg\Properties\BoxProperty box()
 * @method static \NilPortugues\SchemaOrg\Properties\CircleProperty circle()
 * @method static \NilPortugues\SchemaOrg\Properties\ElevationProperty elevation()
 * @method static \NilPortugues\SchemaOrg\Properties\LineProperty line()
 * @method static \NilPortugues\SchemaOrg\Properties\PolygonProperty polygon()
 * @method static \NilPortugues\SchemaOrg\Properties\PostalCodeProperty postalCode()
 * METHODEND.
 *
 * The geographic shape of a place. A GeoShape can be described using several properties whose values are based on latitude/longitude pairs. Either whitespace or commas can be used to separate latitude and longitude; whitespace should be used when writing a list of several such points.
 */
class GeoShape extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/GeoShape';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'address' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AddressProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoShape',
        ],
        'addressCountry' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AddressCountryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoShape',
        ],
        'box' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BoxProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoShape',
        ],
        'circle' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CircleProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoShape',
        ],
        'elevation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ElevationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoShape',
        ],
        'line' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoShape',
        ],
        'polygon' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PolygonProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoShape',
        ],
        'postalCode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PostalCodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoShape',
        ],
    ];
}
