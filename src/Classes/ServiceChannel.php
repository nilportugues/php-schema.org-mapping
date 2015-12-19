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
 * @method static \NilPortugues\SchemaOrg\Properties\AvailableLanguageProperty availableLanguage()
 * @method static \NilPortugues\SchemaOrg\Properties\ProcessingTimeProperty processingTime()
 * @method static \NilPortugues\SchemaOrg\Properties\ProvidesServiceProperty providesService()
 * @method static \NilPortugues\SchemaOrg\Properties\ServiceLocationProperty serviceLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\ServicePhoneProperty servicePhone()
 * @method static \NilPortugues\SchemaOrg\Properties\ServicePostalAddressProperty servicePostalAddress()
 * @method static \NilPortugues\SchemaOrg\Properties\ServiceSmsNumberProperty serviceSmsNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\ServiceUrlProperty serviceUrl()
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
 * A means for accessing a service, e.g. a government office location, web site, or phone number.
 */
class ServiceChannel extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/ServiceChannel';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'availableLanguage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailableLanguageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ServiceChannel',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
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
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'processingTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProcessingTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ServiceChannel',
        ],
        'providesService' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProvidesServiceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ServiceChannel',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'serviceLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServiceLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ServiceChannel',
        ],
        'servicePhone' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServicePhoneProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ServiceChannel',
        ],
        'servicePostalAddress' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServicePostalAddressProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ServiceChannel',
        ],
        'serviceSmsNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServiceSmsNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ServiceChannel',
        ],
        'serviceUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServiceUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ServiceChannel',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
