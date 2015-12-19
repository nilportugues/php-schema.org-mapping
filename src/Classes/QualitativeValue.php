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
 * METHODEND.
 *
 * A predefined value for a product characteristic, e.g. the power cord plug type "US" or the garment sizes "S", "M", "L", and "XL".
 */
class QualitativeValue extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/QualitativeValue';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalProperty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalPropertyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QualitativeValue',
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
        'lesser' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LesserProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QualitativeValue',
        ],
        'lesserOrEqual' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LesserOrEqualProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QualitativeValue',
        ],
        'nonEqual' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NonEqualProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QualitativeValue',
        ],
        'valueReference' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValueReferenceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QualitativeValue',
        ],
    ];
}
