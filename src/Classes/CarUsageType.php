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
 * @method static \NilPortugues\SchemaOrg\Properties\EqualProperty equal()
 * @method static \NilPortugues\SchemaOrg\Properties\GreaterProperty greater()
 * @method static \NilPortugues\SchemaOrg\Properties\GreaterOrEqualProperty greaterOrEqual()
 * @method static \NilPortugues\SchemaOrg\Properties\LesserProperty lesser()
 * @method static \NilPortugues\SchemaOrg\Properties\LesserOrEqualProperty lesserOrEqual()
 * @method static \NilPortugues\SchemaOrg\Properties\NonEqualProperty nonEqual()
 * @method static \NilPortugues\SchemaOrg\Properties\ValueReferenceProperty valueReference()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalPropertyProperty additionalProperty()
 * @method static \NilPortugues\SchemaOrg\Properties\SupersededByProperty supersededBy()
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
 * A value indicating a special usage of a car, e.g. commercial rental, driving school, or as a taxi.
 */
class CarUsageType extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/CarUsageType';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalProperty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalPropertyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QualitativeValue',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'equal' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EqualProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QualitativeValue',
        ],
        'greater' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GreaterProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QualitativeValue',
        ],
        'greaterOrEqual' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GreaterOrEqualProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QualitativeValue',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'lesser' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LesserProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QualitativeValue',
        ],
        'lesserOrEqual' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LesserOrEqualProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QualitativeValue',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'nonEqual' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NonEqualProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QualitativeValue',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'supersededBy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SupersededByProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Enumeration',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'valueReference' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValueReferenceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QualitativeValue',
        ],
    ];
}
