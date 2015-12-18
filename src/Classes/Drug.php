<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ActiveIngredient;
use NilPortugues\SchemaOrg\Properties\AdministrationRoute;
use NilPortugues\SchemaOrg\Properties\AlcoholWarning;
use NilPortugues\SchemaOrg\Properties\AvailableStrength;
use NilPortugues\SchemaOrg\Properties\BreastfeedingWarning;
use NilPortugues\SchemaOrg\Properties\ClinicalPharmacology;
use NilPortugues\SchemaOrg\Properties\Code;
use NilPortugues\SchemaOrg\Properties\Cost;
use NilPortugues\SchemaOrg\Properties\DosageForm;
use NilPortugues\SchemaOrg\Properties\DoseSchedule;
use NilPortugues\SchemaOrg\Properties\DrugClass;
use NilPortugues\SchemaOrg\Properties\FoodWarning;
use NilPortugues\SchemaOrg\Properties\Guideline;
use NilPortugues\SchemaOrg\Properties\InteractingDrug;
use NilPortugues\SchemaOrg\Properties\IsAvailableGenerically;
use NilPortugues\SchemaOrg\Properties\IsProprietary;
use NilPortugues\SchemaOrg\Properties\LabelDetails;
use NilPortugues\SchemaOrg\Properties\LegalStatus;
use NilPortugues\SchemaOrg\Properties\Manufacturer;
use NilPortugues\SchemaOrg\Properties\MechanismOfAction;
use NilPortugues\SchemaOrg\Properties\MedicineSystem;
use NilPortugues\SchemaOrg\Properties\NonProprietaryName;
use NilPortugues\SchemaOrg\Properties\Overdosage;
use NilPortugues\SchemaOrg\Properties\PregnancyCategory;
use NilPortugues\SchemaOrg\Properties\PregnancyWarning;
use NilPortugues\SchemaOrg\Properties\PrescribingInfo;
use NilPortugues\SchemaOrg\Properties\PrescriptionStatus;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthority;
use NilPortugues\SchemaOrg\Properties\RelatedDrug;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialty;
use NilPortugues\SchemaOrg\Properties\Study;
use NilPortugues\SchemaOrg\Properties\Warning;

/**
 * Classes Drug
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A chemical or biologic substance, used as a medical therapy, that has a physiological effect on an organism.
 */
class Drug
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Drug";

   /**
    * Returns the URL of the current definition at http://schema.org
    *
    * @return string
    */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

   /**
    * @return Mapping
    */
    public static function activeIngredient()
    {
        return ActiveIngredient::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function administrationRoute()
    {
        return AdministrationRoute::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function alcoholWarning()
    {
        return AlcoholWarning::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function availableStrength()
    {
        return AvailableStrength::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function breastfeedingWarning()
    {
        return BreastfeedingWarning::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function clinicalPharmacology()
    {
        return ClinicalPharmacology::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function code()
    {
        return Code::create(MedicalEntity::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function cost()
    {
        return Cost::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function dosageForm()
    {
        return DosageForm::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function doseSchedule()
    {
        return DoseSchedule::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function drugClass()
    {
        return DrugClass::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function foodWarning()
    {
        return FoodWarning::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function guideline()
    {
        return Guideline::create(MedicalEntity::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function interactingDrug()
    {
        return InteractingDrug::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function isAvailableGenerically()
    {
        return IsAvailableGenerically::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function isProprietary()
    {
        return IsProprietary::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function labelDetails()
    {
        return LabelDetails::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function legalStatus()
    {
        return LegalStatus::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function manufacturer()
    {
        return Manufacturer::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function mechanismOfAction()
    {
        return MechanismOfAction::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function medicineSystem()
    {
        return MedicineSystem::create(MedicalEntity::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function nonProprietaryName()
    {
        return NonProprietaryName::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function overdosage()
    {
        return Overdosage::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function pregnancyCategory()
    {
        return PregnancyCategory::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function pregnancyWarning()
    {
        return PregnancyWarning::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function prescribingInfo()
    {
        return PrescribingInfo::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function prescriptionStatus()
    {
        return PrescriptionStatus::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function recognizingAuthority()
    {
        return RecognizingAuthority::create(MedicalEntity::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function relatedDrug()
    {
        return RelatedDrug::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function relevantSpecialty()
    {
        return RelevantSpecialty::create(MedicalEntity::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function study()
    {
        return Study::create(MedicalEntity::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function warning()
    {
        return Warning::create(self::schemaUrl());
    }
}