<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ActivityDuration;
use NilPortugues\SchemaOrg\Properties\ActivityFrequency;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AdditionalVariable;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\Code;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\ExerciseType;
use NilPortugues\SchemaOrg\Properties\Guideline;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\Intensity;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\MedicineSystem;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthority;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialty;
use NilPortugues\SchemaOrg\Properties\Repetitions;
use NilPortugues\SchemaOrg\Properties\RestPeriods;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Study;
use NilPortugues\SchemaOrg\Properties\Url;
use NilPortugues\SchemaOrg\Properties\Workload;

/**
 * Classes ExercisePlan
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Fitness-related activity designed for a specific health-related purpose, including defined exercise routines as well as activity prescribed by a clinician.
 */
class ExercisePlan
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/ExercisePlan";

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
    public static function activityDuration()
    {
        return ActivityDuration::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function activityFrequency()
    {
        return ActivityFrequency::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function additionalType()
    {
        return AdditionalType::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function additionalVariable()
    {
        return AdditionalVariable::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function alternateName()
    {
        return AlternateName::create(Thing::schemaUrl());
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
    public static function description()
    {
        return Description::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function exerciseType()
    {
        return ExerciseType::create(self::schemaUrl());
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
    public static function image()
    {
        return Image::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function intensity()
    {
        return Intensity::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPage::create(Thing::schemaUrl());
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
    public static function name()
    {
        return Name::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function potentialAction()
    {
        return PotentialAction::create(Thing::schemaUrl());
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
    public static function relevantSpecialty()
    {
        return RelevantSpecialty::create(MedicalEntity::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function repetitions()
    {
        return Repetitions::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function restPeriods()
    {
        return RestPeriods::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function sameAs()
    {
        return SameAs::create(Thing::schemaUrl());
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
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function workload()
    {
        return Workload::create(self::schemaUrl());
    }
}