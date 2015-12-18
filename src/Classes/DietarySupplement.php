<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ActiveIngredient;
use NilPortugues\SchemaOrg\Properties\Background;
use NilPortugues\SchemaOrg\Properties\Code;
use NilPortugues\SchemaOrg\Properties\DosageForm;
use NilPortugues\SchemaOrg\Properties\Guideline;
use NilPortugues\SchemaOrg\Properties\IsProprietary;
use NilPortugues\SchemaOrg\Properties\LegalStatus;
use NilPortugues\SchemaOrg\Properties\Manufacturer;
use NilPortugues\SchemaOrg\Properties\MaximumIntake;
use NilPortugues\SchemaOrg\Properties\MechanismOfAction;
use NilPortugues\SchemaOrg\Properties\MedicineSystem;
use NilPortugues\SchemaOrg\Properties\NonProprietaryName;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthority;
use NilPortugues\SchemaOrg\Properties\RecommendedIntake;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialty;
use NilPortugues\SchemaOrg\Properties\SafetyConsideration;
use NilPortugues\SchemaOrg\Properties\Study;
use NilPortugues\SchemaOrg\Properties\TargetPopulation;

/**
 * Classes DietarySupplement.
 */
class DietarySupplement
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/DietarySupplement';

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
        return ActiveIngredient::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function background()
    {
        return Background::create(self::schemaUrl());
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
    public static function dosageForm()
    {
        return DosageForm::create(self::schemaUrl());
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
    public static function isProprietary()
    {
        return IsProprietary::create(self::schemaUrl());
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
    public static function maximumIntake()
    {
        return MaximumIntake::create(self::schemaUrl());
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
    public static function recognizingAuthority()
    {
        return RecognizingAuthority::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recommendedIntake()
    {
        return RecommendedIntake::create(self::schemaUrl());
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
    public static function safetyConsideration()
    {
        return SafetyConsideration::create(self::schemaUrl());
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
    public static function targetPopulation()
    {
        return TargetPopulation::create(self::schemaUrl());
    }
}
