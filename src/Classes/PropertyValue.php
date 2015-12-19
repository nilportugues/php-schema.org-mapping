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
 * @method static \NilPortugues\SchemaOrg\Properties\UnitTextProperty unitText()
 * @method static \NilPortugues\SchemaOrg\Properties\PropertyIDProperty propertyID()
 * METHODEND.
 *
 * A property-value pair, e.g. representing a feature of a product or place. Use the 'name' property for the name of the property. If there is an additional human-readable version of the value, put that into the 'description' property.
 */
class PropertyValue extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/PropertyValue';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'maxValue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MaxValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValue',
        ],
        'minValue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MinValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValue',
        ],
        'propertyID' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PropertyIDProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValue',
        ],
        'unitCode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UnitCodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValue',
        ],
        'unitText' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UnitTextProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValue',
        ],
        'value' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValue',
        ],
        'valueReference' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValueReferenceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValue',
        ],
    ];
}
