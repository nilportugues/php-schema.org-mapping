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
 * @method static \NilPortugues\SchemaOrg\Properties\AssociatedAnatomyProperty associatedAnatomy()
 * @method static \NilPortugues\SchemaOrg\Properties\CauseProperty cause()
 * @method static \NilPortugues\SchemaOrg\Properties\DifferentialDiagnosisProperty differentialDiagnosis()
 * @method static \NilPortugues\SchemaOrg\Properties\EpidemiologyProperty epidemiology()
 * @method static \NilPortugues\SchemaOrg\Properties\ExpectedPrognosisProperty expectedPrognosis()
 * @method static \NilPortugues\SchemaOrg\Properties\NaturalProgressionProperty naturalProgression()
 * @method static \NilPortugues\SchemaOrg\Properties\PathophysiologyProperty pathophysiology()
 * @method static \NilPortugues\SchemaOrg\Properties\PossibleComplicationProperty possibleComplication()
 * @method static \NilPortugues\SchemaOrg\Properties\PossibleTreatmentProperty possibleTreatment()
 * @method static \NilPortugues\SchemaOrg\Properties\PrimaryPreventionProperty primaryPrevention()
 * @method static \NilPortugues\SchemaOrg\Properties\RiskFactorProperty riskFactor()
 * @method static \NilPortugues\SchemaOrg\Properties\SecondaryPreventionProperty secondaryPrevention()
 * @method static \NilPortugues\SchemaOrg\Properties\SignOrSymptomProperty signOrSymptom()
 * @method static \NilPortugues\SchemaOrg\Properties\StageProperty stage()
 * @method static \NilPortugues\SchemaOrg\Properties\SubtypeProperty subtype()
 * @method static \NilPortugues\SchemaOrg\Properties\TypicalTestProperty typicalTest()
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
 * Any condition of the human body that affects the normal functioning of a person, whether physically or mentally. Includes diseases, injuries, disabilities, disorders, syndromes, etc.
 */
class MedicalCondition extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/MedicalCondition';

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
        'associatedAnatomy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AssociatedAnatomyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'cause' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CauseProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'differentialDiagnosis' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DifferentialDiagnosisProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'epidemiology' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EpidemiologyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'expectedPrognosis' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExpectedPrognosisProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
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
        'naturalProgression' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NaturalProgressionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'pathophysiology' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PathophysiologyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'possibleComplication' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PossibleComplicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'possibleTreatment' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PossibleTreatmentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'primaryPrevention' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PrimaryPreventionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'riskFactor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RiskFactorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'secondaryPrevention' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SecondaryPreventionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'signOrSymptom' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SignOrSymptomProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'stage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'subtype' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SubtypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'typicalTest' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TypicalTestProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
