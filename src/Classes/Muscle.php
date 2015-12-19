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
 * @method static \NilPortugues\SchemaOrg\Properties\ActionProperty action()
 * @method static \NilPortugues\SchemaOrg\Properties\MuscleActionProperty muscleAction()
 * @method static \NilPortugues\SchemaOrg\Properties\AntagonistProperty antagonist()
 * @method static \NilPortugues\SchemaOrg\Properties\BloodSupplyProperty bloodSupply()
 * @method static \NilPortugues\SchemaOrg\Properties\InsertionProperty insertion()
 * @method static \NilPortugues\SchemaOrg\Properties\NerveProperty nerve()
 * @method static \NilPortugues\SchemaOrg\Properties\OriginProperty origin()
 * @method static \NilPortugues\SchemaOrg\Properties\AssociatedPathophysiologyProperty associatedPathophysiology()
 * @method static \NilPortugues\SchemaOrg\Properties\BodyLocationProperty bodyLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\ConnectedToProperty connectedTo()
 * @method static \NilPortugues\SchemaOrg\Properties\DiagramProperty diagram()
 * @method static \NilPortugues\SchemaOrg\Properties\FunctionTypeProperty functionType()
 * @method static \NilPortugues\SchemaOrg\Properties\PartOfSystemProperty partOfSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RelatedConditionProperty relatedCondition()
 * @method static \NilPortugues\SchemaOrg\Properties\RelatedTherapyProperty relatedTherapy()
 * @method static \NilPortugues\SchemaOrg\Properties\SubStructureProperty subStructure()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeProperty code()
 * @method static \NilPortugues\SchemaOrg\Properties\GuidelineProperty guideline()
 * @method static \NilPortugues\SchemaOrg\Properties\MedicineSystemProperty medicineSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty recognizingAuthority()
 * @method static \NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty relevantSpecialty()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyProperty study()
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
 * A muscle is an anatomical structure consisting of a contractile form of tissue that animals use to effect movement.
 */
class Muscle extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Muscle';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'action' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'antagonist' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AntagonistProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
        ],
        'associatedPathophysiology' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AssociatedPathophysiologyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
        ],
        'bloodSupply' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BloodSupplyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
        ],
        'bodyLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BodyLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
        ],
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
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
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'insertion' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InsertionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'medicineSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MedicineSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'muscleAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MuscleActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'nerve' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NerveProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
        ],
        'origin' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OriginProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
        ],
        'partOfSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PartOfSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'recognizingAuthority' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'relatedCondition' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelatedConditionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
        ],
        'relatedTherapy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelatedTherapyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AnatomicalStructure',
        ],
        'relevantSpecialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
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
