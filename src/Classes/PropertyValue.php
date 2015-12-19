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
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'maxValue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MaxValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValue',
        ],
        'minValue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MinValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValue',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'propertyID' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PropertyIDProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValue',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'unitCode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UnitCodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValue',
        ],
        'unitText' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UnitTextProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValue',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
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
