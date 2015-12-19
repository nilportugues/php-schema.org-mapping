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
 * @method static \NilPortugues\SchemaOrg\Properties\AvailableTestProperty availableTest()
 * @method static \NilPortugues\SchemaOrg\Properties\BranchOfProperty branchOf()
 * @method static \NilPortugues\SchemaOrg\Properties\BranchCodeProperty branchCode()
 * @method static \NilPortugues\SchemaOrg\Properties\CurrenciesAcceptedProperty currenciesAccepted()
 * @method static \NilPortugues\SchemaOrg\Properties\OpeningHoursProperty openingHours()
 * @method static \NilPortugues\SchemaOrg\Properties\PaymentAcceptedProperty paymentAccepted()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceRangeProperty priceRange()
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
 * A medical laboratory that offers on-site or off-site diagnostic services.
 */
class DiagnosticLab extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/DiagnosticLab';

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
        'availableTest' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailableTestProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DiagnosticLab',
        ],
        'branchCode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BranchCodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\LocalBusiness',
        ],
        'branchOf' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BranchOfProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\LocalBusiness',
        ],
        'currenciesAccepted' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CurrenciesAcceptedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\LocalBusiness',
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
        'openingHours' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OpeningHoursProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\LocalBusiness',
        ],
        'paymentAccepted' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PaymentAcceptedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\LocalBusiness',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'priceRange' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceRangeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\LocalBusiness',
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
