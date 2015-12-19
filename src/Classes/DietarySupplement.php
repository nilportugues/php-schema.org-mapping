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
 * @method static \NilPortugues\SchemaOrg\Properties\ActiveIngredientProperty activeIngredient()
 * @method static \NilPortugues\SchemaOrg\Properties\BackgroundProperty background()
 * @method static \NilPortugues\SchemaOrg\Properties\DosageFormProperty dosageForm()
 * @method static \NilPortugues\SchemaOrg\Properties\IsProprietaryProperty isProprietary()
 * @method static \NilPortugues\SchemaOrg\Properties\LegalStatusProperty legalStatus()
 * @method static \NilPortugues\SchemaOrg\Properties\ManufacturerProperty manufacturer()
 * @method static \NilPortugues\SchemaOrg\Properties\MaximumIntakeProperty maximumIntake()
 * @method static \NilPortugues\SchemaOrg\Properties\MechanismOfActionProperty mechanismOfAction()
 * @method static \NilPortugues\SchemaOrg\Properties\NonProprietaryNameProperty nonProprietaryName()
 * @method static \NilPortugues\SchemaOrg\Properties\RecommendedIntakeProperty recommendedIntake()
 * @method static \NilPortugues\SchemaOrg\Properties\SafetyConsiderationProperty safetyConsideration()
 * @method static \NilPortugues\SchemaOrg\Properties\TargetPopulationProperty targetPopulation()
 * @method static \NilPortugues\SchemaOrg\Properties\AdverseOutcomeProperty adverseOutcome()
 * @method static \NilPortugues\SchemaOrg\Properties\ContraindicationProperty contraindication()
 * @method static \NilPortugues\SchemaOrg\Properties\DuplicateTherapyProperty duplicateTherapy()
 * @method static \NilPortugues\SchemaOrg\Properties\IndicationProperty indication()
 * @method static \NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcomeProperty seriousAdverseOutcome()
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
 * A product taken by mouth that contains a dietary ingredient intended to supplement the diet. Dietary ingredients may include vitamins, minerals, herbs or other botanicals, amino acids, and substances such as enzymes, organ tissues, glandulars and metabolites.
 */
class DietarySupplement extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/DietarySupplement';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'activeIngredient' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActiveIngredientProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DietarySupplement',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'adverseOutcome' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdverseOutcomeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'background' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BackgroundProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DietarySupplement',
        ],
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'contraindication' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContraindicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'dosageForm' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DosageFormProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DietarySupplement',
        ],
        'duplicateTherapy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DuplicateTherapyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'indication' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IndicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'isProprietary' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsProprietaryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DietarySupplement',
        ],
        'legalStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LegalStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DietarySupplement',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'manufacturer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ManufacturerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DietarySupplement',
        ],
        'maximumIntake' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MaximumIntakeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DietarySupplement',
        ],
        'mechanismOfAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MechanismOfActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DietarySupplement',
        ],
        'medicineSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MedicineSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'nonProprietaryName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NonProprietaryNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DietarySupplement',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'recognizingAuthority' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'recommendedIntake' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecommendedIntakeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DietarySupplement',
        ],
        'relevantSpecialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'safetyConsideration' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SafetyConsiderationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DietarySupplement',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'seriousAdverseOutcome' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcomeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'targetPopulation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TargetPopulationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DietarySupplement',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
