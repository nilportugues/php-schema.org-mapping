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
 * @method static \NilPortugues\SchemaOrg\Properties\AssociatedPathophysiologyProperty associatedPathophysiology()
 * @method static \NilPortugues\SchemaOrg\Properties\BodyLocationProperty bodyLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\ConnectedToProperty connectedTo()
 * @method static \NilPortugues\SchemaOrg\Properties\DiagramProperty diagram()
 * @method static \NilPortugues\SchemaOrg\Properties\FunctionTypeProperty functionType()
 * @method static \NilPortugues\SchemaOrg\Properties\PartOfSystemProperty partOfSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RelatedConditionProperty relatedCondition()
 * @method static \NilPortugues\SchemaOrg\Properties\RelatedTherapyProperty relatedTherapy()
 * @method static \NilPortugues\SchemaOrg\Properties\SubStructureProperty subStructure()
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
 * Any part of the human body, typically a component of an anatomical system. Organs, tissues, and cells are all anatomical structures.
 */
class AnatomicalStructure extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/AnatomicalStructure';

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
        'associatedPathophysiology' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AssociatedPathophysiologyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
        ],
        'bodyLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BodyLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
        ],
        'connectedTo' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ConnectedToProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'diagram' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DiagramProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
        ],
        'functionType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FunctionTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
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
        'partOfSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PartOfSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'relatedCondition' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelatedConditionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
        ],
        'relatedTherapy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelatedTherapyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'subStructure' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SubStructureProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
