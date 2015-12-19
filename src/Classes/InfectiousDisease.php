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
 * @method static \NilPortugues\SchemaOrg\Properties\InfectiousAgentProperty infectiousAgent()
 * @method static \NilPortugues\SchemaOrg\Properties\InfectiousAgentClassProperty infectiousAgentClass()
 * @method static \NilPortugues\SchemaOrg\Properties\TransmissionMethodProperty transmissionMethod()
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
 * An infectious disease is a clinically evident human disease resulting from the presence of pathogenic microbial agents, like pathogenic viruses, pathogenic bacteria, fungi, protozoa, multicellular parasites, and prions. To be considered an infectious disease, such pathogens are known to be able to cause this disease.
 */
class InfectiousDisease extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/InfectiousDisease';

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
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
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
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'infectiousAgent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InfectiousAgentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\InfectiousDisease',
        ],
        'infectiousAgentClass' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InfectiousAgentClassProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\InfectiousDisease',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'medicineSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MedicineSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
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
        'recognizingAuthority' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'relevantSpecialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
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
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'subtype' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SubtypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalCondition',
        ],
        'transmissionMethod' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TransmissionMethodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\InfectiousDisease',
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
