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

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ActiveIngredientProperty;
use NilPortugues\SchemaOrg\Properties\BackgroundProperty;
use NilPortugues\SchemaOrg\Properties\CodeProperty;
use NilPortugues\SchemaOrg\Properties\DosageFormProperty;
use NilPortugues\SchemaOrg\Properties\GuidelineProperty;
use NilPortugues\SchemaOrg\Properties\IsProprietaryProperty;
use NilPortugues\SchemaOrg\Properties\LegalStatusProperty;
use NilPortugues\SchemaOrg\Properties\ManufacturerProperty;
use NilPortugues\SchemaOrg\Properties\MaximumIntakeProperty;
use NilPortugues\SchemaOrg\Properties\MechanismOfActionProperty;
use NilPortugues\SchemaOrg\Properties\MedicineSystemProperty;
use NilPortugues\SchemaOrg\Properties\NonProprietaryNameProperty;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty;
use NilPortugues\SchemaOrg\Properties\RecommendedIntakeProperty;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty;
use NilPortugues\SchemaOrg\Properties\SafetyConsiderationProperty;
use NilPortugues\SchemaOrg\Properties\StudyProperty;
use NilPortugues\SchemaOrg\Properties\TargetPopulationProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes DietarySupplement.
 */
class DietarySupplement extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/DietarySupplement';

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
    public static function background()
    {
        return BackgroundProperty::create(self::schemaUrl());
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
    public static function dosageForm()
    {
        return DosageFormProperty::create(self::schemaUrl());
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
    public static function isProprietary()
    {
        return IsProprietaryProperty::create(self::schemaUrl());
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
    public static function maximumIntake()
    {
        return MaximumIntakeProperty::create(self::schemaUrl());
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
    public static function recognizingAuthority()
    {
        return RecognizingAuthorityProperty::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recommendedIntake()
    {
        return RecommendedIntakeProperty::create(self::schemaUrl());
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
    public static function safetyConsideration()
    {
        return SafetyConsiderationProperty::create(self::schemaUrl());
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
    public static function targetPopulation()
    {
        return TargetPopulationProperty::create(self::schemaUrl());
    }
}
