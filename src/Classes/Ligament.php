<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\Code;
use NilPortugues\SchemaOrg\Properties\Guideline;
use NilPortugues\SchemaOrg\Properties\MedicineSystem;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthority;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialty;
use NilPortugues\SchemaOrg\Properties\Study;

/**
 * Classes Ligament
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A short band of tough, flexible, fibrous connective tissue that functions to connect multiple bones, cartilages, and structurally support joints.
 */
class Ligament
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Ligament";

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
    public static function medicineSystem()
    {
        return MedicineSystem::create(MedicalEntity::schemaUrl());
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