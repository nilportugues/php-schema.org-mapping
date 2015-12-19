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
 * @method static \NilPortugues\SchemaOrg\Properties\ElevationProperty elevation()
 * @method static \NilPortugues\SchemaOrg\Properties\LatitudeProperty latitude()
 * @method static \NilPortugues\SchemaOrg\Properties\LongitudeProperty longitude()
 * @method static \NilPortugues\SchemaOrg\Properties\PostalCodeProperty postalCode()
 * METHODEND.
 *
 * The geographic coordinates of a place or event.
 */
class GeoCoordinates extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/GeoCoordinates';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'address' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AddressProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoCoordinates',
        ],
        'addressCountry' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AddressCountryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoCoordinates',
        ],
        'elevation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ElevationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoCoordinates',
        ],
        'latitude' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LatitudeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoCoordinates',
        ],
        'longitude' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LongitudeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoCoordinates',
        ],
        'postalCode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PostalCodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoCoordinates',
        ],
    ];
}
