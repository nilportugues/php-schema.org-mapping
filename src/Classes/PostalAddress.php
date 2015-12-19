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
 * @method static \NilPortugues\SchemaOrg\Properties\AddressCountryProperty addressCountry()
 * @method static \NilPortugues\SchemaOrg\Properties\AddressLocalityProperty addressLocality()
 * @method static \NilPortugues\SchemaOrg\Properties\AddressRegionProperty addressRegion()
 * @method static \NilPortugues\SchemaOrg\Properties\PostalCodeProperty postalCode()
 * @method static \NilPortugues\SchemaOrg\Properties\PostOfficeBoxNumberProperty postOfficeBoxNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\StreetAddressProperty streetAddress()
 * @method static \NilPortugues\SchemaOrg\Properties\AreaServedProperty areaServed()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailableLanguageProperty availableLanguage()
 * @method static \NilPortugues\SchemaOrg\Properties\ContactOptionProperty contactOption()
 * @method static \NilPortugues\SchemaOrg\Properties\ContactTypeProperty contactType()
 * @method static \NilPortugues\SchemaOrg\Properties\EmailProperty email()
 * @method static \NilPortugues\SchemaOrg\Properties\FaxNumberProperty faxNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\HoursAvailableProperty hoursAvailable()
 * @method static \NilPortugues\SchemaOrg\Properties\ProductSupportedProperty productSupported()
 * @method static \NilPortugues\SchemaOrg\Properties\ServiceAreaProperty serviceArea()
 * @method static \NilPortugues\SchemaOrg\Properties\TelephoneProperty telephone()
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
 * The mailing address.
 */
class PostalAddress extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/PostalAddress';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'addressCountry' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AddressCountryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PostalAddress',
        ],
        'addressLocality' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AddressLocalityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PostalAddress',
        ],
        'addressRegion' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AddressRegionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PostalAddress',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'areaServed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AreaServedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ContactPoint',
        ],
        'availableLanguage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailableLanguageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ContactPoint',
        ],
        'contactOption' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContactOptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ContactPoint',
        ],
        'contactType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContactTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ContactPoint',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'email' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EmailProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ContactPoint',
        ],
        'faxNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FaxNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ContactPoint',
        ],
        'hoursAvailable' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HoursAvailableProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ContactPoint',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'postOfficeBoxNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PostOfficeBoxNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PostalAddress',
        ],
        'postalCode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PostalCodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PostalAddress',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'productSupported' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProductSupportedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ContactPoint',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'serviceArea' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServiceAreaProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ContactPoint',
        ],
        'streetAddress' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StreetAddressProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PostalAddress',
        ],
        'telephone' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TelephoneProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ContactPoint',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
