<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ActiveIngredientProperty;
use NilPortugues\SchemaOrg\Properties\AdministrationRouteProperty;
use NilPortugues\SchemaOrg\Properties\AlcoholWarningProperty;
use NilPortugues\SchemaOrg\Properties\AvailableStrengthProperty;
use NilPortugues\SchemaOrg\Properties\BreastfeedingWarningProperty;
use NilPortugues\SchemaOrg\Properties\ClinicalPharmacologyProperty;
use NilPortugues\SchemaOrg\Properties\CodeProperty;
use NilPortugues\SchemaOrg\Properties\CostProperty;
use NilPortugues\SchemaOrg\Properties\DosageFormProperty;
use NilPortugues\SchemaOrg\Properties\DoseScheduleProperty;
use NilPortugues\SchemaOrg\Properties\DrugClassProperty;
use NilPortugues\SchemaOrg\Properties\FoodWarningProperty;
use NilPortugues\SchemaOrg\Properties\GuidelineProperty;
use NilPortugues\SchemaOrg\Properties\InteractingDrugProperty;
use NilPortugues\SchemaOrg\Properties\IsAvailableGenericallyProperty;
use NilPortugues\SchemaOrg\Properties\IsProprietaryProperty;
use NilPortugues\SchemaOrg\Properties\LabelDetailsProperty;
use NilPortugues\SchemaOrg\Properties\LegalStatusProperty;
use NilPortugues\SchemaOrg\Properties\ManufacturerProperty;
use NilPortugues\SchemaOrg\Properties\MechanismOfActionProperty;
use NilPortugues\SchemaOrg\Properties\MedicineSystemProperty;
use NilPortugues\SchemaOrg\Properties\NonProprietaryNameProperty;
use NilPortugues\SchemaOrg\Properties\OverdosageProperty;
use NilPortugues\SchemaOrg\Properties\PregnancyCategoryProperty;
use NilPortugues\SchemaOrg\Properties\PregnancyWarningProperty;
use NilPortugues\SchemaOrg\Properties\PrescribingInfoProperty;
use NilPortugues\SchemaOrg\Properties\PrescriptionStatusProperty;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty;
use NilPortugues\SchemaOrg\Properties\RelatedDrugProperty;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty;
use NilPortugues\SchemaOrg\Properties\StudyProperty;
use NilPortugues\SchemaOrg\Properties\WarningProperty;

/**
 * Classes Drug.
 */
class Drug
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Drug';

    /**
     * Returns the URL of the current definition at http://schema.org.
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
        return ActiveIngredientProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function administrationRoute()
    {
        return AdministrationRouteProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alcoholWarning()
    {
        return AlcoholWarningProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function availableStrength()
    {
        return AvailableStrengthProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function breastfeedingWarning()
    {
        return BreastfeedingWarningProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function clinicalPharmacology()
    {
        return ClinicalPharmacologyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function code()
    {
        return CodeProperty::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function cost()
    {
        return CostProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dosageForm()
    {
        return DosageFormProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function doseSchedule()
    {
        return DoseScheduleProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function drugClass()
    {
        return DrugClassProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function foodWarning()
    {
        return FoodWarningProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function guideline()
    {
        return GuidelineProperty::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function interactingDrug()
    {
        return InteractingDrugProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isAvailableGenerically()
    {
        return IsAvailableGenericallyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isProprietary()
    {
        return IsProprietaryProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function labelDetails()
    {
        return LabelDetailsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function legalStatus()
    {
        return LegalStatusProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function manufacturer()
    {
        return ManufacturerProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mechanismOfAction()
    {
        return MechanismOfActionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function medicineSystem()
    {
        return MedicineSystemProperty::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function nonProprietaryName()
    {
        return NonProprietaryNameProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function overdosage()
    {
        return OverdosageProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pregnancyCategory()
    {
        return PregnancyCategoryProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pregnancyWarning()
    {
        return PregnancyWarningProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function prescribingInfo()
    {
        return PrescribingInfoProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function prescriptionStatus()
    {
        return PrescriptionStatusProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recognizingAuthority()
    {
        return RecognizingAuthorityProperty::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function relatedDrug()
    {
        return RelatedDrugProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function relevantSpecialty()
    {
        return RelevantSpecialtyProperty::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function study()
    {
        return StudyProperty::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function warning()
    {
        return WarningProperty::create(self::schemaUrl());
    }
}
