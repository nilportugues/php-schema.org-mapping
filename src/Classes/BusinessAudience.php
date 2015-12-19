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
 * @method static \NilPortugues\SchemaOrg\Properties\NumberOfEmployeesProperty numberOfEmployees()
 * @method static \NilPortugues\SchemaOrg\Properties\YearlyRevenueProperty yearlyRevenue()
 * @method static \NilPortugues\SchemaOrg\Properties\YearsInOperationProperty yearsInOperation()
 * @method static \NilPortugues\SchemaOrg\Properties\AudienceTypeProperty audienceType()
 * @method static \NilPortugues\SchemaOrg\Properties\GeographicAreaProperty geographicArea()
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
 * A set of characteristics belonging to businesses, e.g. who compose an item's target audience.
 */
class BusinessAudience extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/BusinessAudience';

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
        'audienceType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AudienceTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Audience',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'geographicArea' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GeographicAreaProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Audience',
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
        'numberOfEmployees' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NumberOfEmployeesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BusinessAudience',
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
        'yearlyRevenue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\YearlyRevenueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BusinessAudience',
        ],
        'yearsInOperation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\YearsInOperationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\BusinessAudience',
        ],
    ];
}
