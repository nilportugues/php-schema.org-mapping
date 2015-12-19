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
 * @method static \NilPortugues\SchemaOrg\Properties\AdministrationRouteProperty administrationRoute()
 * @method static \NilPortugues\SchemaOrg\Properties\AlcoholWarningProperty alcoholWarning()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailableStrengthProperty availableStrength()
 * @method static \NilPortugues\SchemaOrg\Properties\BreastfeedingWarningProperty breastfeedingWarning()
 * @method static \NilPortugues\SchemaOrg\Properties\ClinicalPharmacologyProperty clinicalPharmacology()
 * @method static \NilPortugues\SchemaOrg\Properties\CostProperty cost()
 * @method static \NilPortugues\SchemaOrg\Properties\DosageFormProperty dosageForm()
 * @method static \NilPortugues\SchemaOrg\Properties\DoseScheduleProperty doseSchedule()
 * @method static \NilPortugues\SchemaOrg\Properties\DrugClassProperty drugClass()
 * @method static \NilPortugues\SchemaOrg\Properties\FoodWarningProperty foodWarning()
 * @method static \NilPortugues\SchemaOrg\Properties\InteractingDrugProperty interactingDrug()
 * @method static \NilPortugues\SchemaOrg\Properties\IsAvailableGenericallyProperty isAvailableGenerically()
 * @method static \NilPortugues\SchemaOrg\Properties\IsProprietaryProperty isProprietary()
 * @method static \NilPortugues\SchemaOrg\Properties\LabelDetailsProperty labelDetails()
 * @method static \NilPortugues\SchemaOrg\Properties\LegalStatusProperty legalStatus()
 * @method static \NilPortugues\SchemaOrg\Properties\ManufacturerProperty manufacturer()
 * @method static \NilPortugues\SchemaOrg\Properties\MechanismOfActionProperty mechanismOfAction()
 * @method static \NilPortugues\SchemaOrg\Properties\NonProprietaryNameProperty nonProprietaryName()
 * @method static \NilPortugues\SchemaOrg\Properties\OverdosageProperty overdosage()
 * @method static \NilPortugues\SchemaOrg\Properties\PregnancyCategoryProperty pregnancyCategory()
 * @method static \NilPortugues\SchemaOrg\Properties\PregnancyWarningProperty pregnancyWarning()
 * @method static \NilPortugues\SchemaOrg\Properties\PrescribingInfoProperty prescribingInfo()
 * @method static \NilPortugues\SchemaOrg\Properties\PrescriptionStatusProperty prescriptionStatus()
 * @method static \NilPortugues\SchemaOrg\Properties\RelatedDrugProperty relatedDrug()
 * @method static \NilPortugues\SchemaOrg\Properties\WarningProperty warning()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeProperty code()
 * @method static \NilPortugues\SchemaOrg\Properties\GuidelineProperty guideline()
 * @method static \NilPortugues\SchemaOrg\Properties\MedicineSystemProperty medicineSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty recognizingAuthority()
 * @method static \NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty relevantSpecialty()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyProperty study()
 * METHODEND.
 *
 * A chemical or biologic substance, used as a medical therapy, that has a physiological effect on an organism.
 */
class Drug extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Drug';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'activeIngredient' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActiveIngredientProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'administrationRoute' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdministrationRouteProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'alcoholWarning' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlcoholWarningProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'availableStrength' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailableStrengthProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'breastfeedingWarning' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BreastfeedingWarningProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'clinicalPharmacology' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ClinicalPharmacologyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'cost' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CostProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'dosageForm' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DosageFormProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'doseSchedule' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DoseScheduleProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'drugClass' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DrugClassProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'foodWarning' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FoodWarningProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'interactingDrug' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InteractingDrugProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'isAvailableGenerically' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsAvailableGenericallyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'isProprietary' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsProprietaryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'labelDetails' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LabelDetailsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'legalStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LegalStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'manufacturer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ManufacturerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'mechanismOfAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MechanismOfActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'medicineSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MedicineSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'nonProprietaryName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NonProprietaryNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'overdosage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OverdosageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'pregnancyCategory' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PregnancyCategoryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'pregnancyWarning' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PregnancyWarningProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'prescribingInfo' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PrescribingInfoProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'prescriptionStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PrescriptionStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'recognizingAuthority' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'relatedDrug' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelatedDrugProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
        'relevantSpecialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'warning' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WarningProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Drug',
        ],
    ];
}
