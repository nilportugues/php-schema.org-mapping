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
 * METHODEND.
 *
 * A contact point&#x2014;for example, a Customer Complaints department.
 */
class ContactPoint extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/ContactPoint';

    /**
     * @var array
     */
    protected static $supportedMethods = [
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
        'productSupported' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProductSupportedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ContactPoint',
        ],
        'serviceArea' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServiceAreaProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ContactPoint',
        ],
        'telephone' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TelephoneProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ContactPoint',
        ],
    ];
}
