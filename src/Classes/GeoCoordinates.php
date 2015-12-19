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
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
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
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'address' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AddressProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoCoordinates',
        ],
        'addressCountry' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AddressCountryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoCoordinates',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'elevation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ElevationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoCoordinates',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'latitude' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LatitudeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoCoordinates',
        ],
        'longitude' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LongitudeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoCoordinates',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'postalCode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PostalCodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GeoCoordinates',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
