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
 * @method static \NilPortugues\SchemaOrg\Properties\AlignmentTypeProperty alignmentType()
 * @method static \NilPortugues\SchemaOrg\Properties\EducationalFrameworkProperty educationalFramework()
 * @method static \NilPortugues\SchemaOrg\Properties\TargetDescriptionProperty targetDescription()
 * @method static \NilPortugues\SchemaOrg\Properties\TargetNameProperty targetName()
 * @method static \NilPortugues\SchemaOrg\Properties\TargetUrlProperty targetUrl()
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
 * An intangible item that describes an alignment between a learning resource and a node in an educational framework.
 */
class AlignmentObject extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/AlignmentObject';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alignmentType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlignmentTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AlignmentObject',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'educationalFramework' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EducationalFrameworkProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AlignmentObject',
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
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'targetDescription' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TargetDescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AlignmentObject',
        ],
        'targetName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TargetNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AlignmentObject',
        ],
        'targetUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TargetUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AlignmentObject',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
