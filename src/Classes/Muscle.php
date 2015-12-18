<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\Action;
use NilPortugues\SchemaOrg\Properties\Antagonist;
use NilPortugues\SchemaOrg\Properties\BloodSupply;
use NilPortugues\SchemaOrg\Properties\Code;
use NilPortugues\SchemaOrg\Properties\Guideline;
use NilPortugues\SchemaOrg\Properties\Insertion;
use NilPortugues\SchemaOrg\Properties\MedicineSystem;
use NilPortugues\SchemaOrg\Properties\MuscleAction;
use NilPortugues\SchemaOrg\Properties\Nerve;
use NilPortugues\SchemaOrg\Properties\Origin;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthority;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialty;
use NilPortugues\SchemaOrg\Properties\Study;

/**
 * Classes Muscle
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A muscle is an anatomical structure consisting of a contractile form of tissue that animals use to effect movement.
 */
class Muscle
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Muscle";

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
    public static function action()
    {
        return Action::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function antagonist()
    {
        return Antagonist::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function bloodSupply()
    {
        return BloodSupply::create(self::schemaUrl());
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
    public static function guideline()
    {
        return Guideline::create(MedicalEntity::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function insertion()
    {
        return Insertion::create(self::schemaUrl());
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
    public static function muscleAction()
    {
        return MuscleAction::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function nerve()
    {
        return Nerve::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function origin()
    {
        return Origin::create(self::schemaUrl());
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
    public static function study()
    {
        return Study::create(MedicalEntity::schemaUrl());
    }
}