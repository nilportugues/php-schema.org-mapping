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
 * @method static \NilPortugues\SchemaOrg\Properties\MaxValueProperty maxValue()
 * @method static \NilPortugues\SchemaOrg\Properties\MinValueProperty minValue()
 * @method static \NilPortugues\SchemaOrg\Properties\UnitCodeProperty unitCode()
 * @method static \NilPortugues\SchemaOrg\Properties\ValueProperty value()
 * @method static \NilPortugues\SchemaOrg\Properties\ValueReferenceProperty valueReference()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalPropertyProperty additionalProperty()
 * @method static \NilPortugues\SchemaOrg\Properties\UnitTextProperty unitText()
 * METHODEND.
 *
 *  A point value or interval for product characteristics and other purposes.
 */
class QuantitativeValue extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/QuantitativeValue';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalProperty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalPropertyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QuantitativeValue',
        ],
        'maxValue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MaxValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QuantitativeValue',
        ],
        'minValue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MinValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QuantitativeValue',
        ],
        'unitCode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UnitCodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QuantitativeValue',
        ],
        'unitText' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UnitTextProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QuantitativeValue',
        ],
        'value' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QuantitativeValue',
        ],
        'valueReference' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValueReferenceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\QuantitativeValue',
        ],
    ];
}
