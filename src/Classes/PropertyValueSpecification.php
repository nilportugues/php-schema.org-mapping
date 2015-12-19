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
 * @method static \NilPortugues\SchemaOrg\Properties\ValueNameProperty valueName()
 * @method static \NilPortugues\SchemaOrg\Properties\ValueRequiredProperty valueRequired()
 * @method static \NilPortugues\SchemaOrg\Properties\DefaultValueProperty defaultValue()
 * @method static \NilPortugues\SchemaOrg\Properties\ReadonlyValueProperty readonlyValue()
 * @method static \NilPortugues\SchemaOrg\Properties\MultipleValuesProperty multipleValues()
 * @method static \NilPortugues\SchemaOrg\Properties\ValueMinLengthProperty valueMinLength()
 * @method static \NilPortugues\SchemaOrg\Properties\ValueMaxLengthProperty valueMaxLength()
 * @method static \NilPortugues\SchemaOrg\Properties\ValuePatternProperty valuePattern()
 * @method static \NilPortugues\SchemaOrg\Properties\StepValueProperty stepValue()
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
 * A Property value specification.
 */
class PropertyValueSpecification extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/PropertyValueSpecification';

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
        'defaultValue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DefaultValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValueSpecification',
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
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValueSpecification',
        ],
        'minValue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MinValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValueSpecification',
        ],
        'multipleValues' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MultipleValuesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValueSpecification',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'readonlyValue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReadonlyValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValueSpecification',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'stepValue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StepValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValueSpecification',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'valueMaxLength' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValueMaxLengthProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValueSpecification',
        ],
        'valueMinLength' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValueMinLengthProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValueSpecification',
        ],
        'valueName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValueNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValueSpecification',
        ],
        'valuePattern' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValuePatternProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValueSpecification',
        ],
        'valueRequired' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValueRequiredProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PropertyValueSpecification',
        ],
    ];
}
