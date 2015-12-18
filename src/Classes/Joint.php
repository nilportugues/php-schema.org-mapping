<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\BiomechnicalClass;
use NilPortugues\SchemaOrg\Properties\Code;
use NilPortugues\SchemaOrg\Properties\FunctionalClass;
use NilPortugues\SchemaOrg\Properties\Guideline;
use NilPortugues\SchemaOrg\Properties\MedicineSystem;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthority;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialty;
use NilPortugues\SchemaOrg\Properties\StructuralClass;
use NilPortugues\SchemaOrg\Properties\Study;

/**
 * Classes Joint
 * @package NilPortugues\SchemaOrg\Classes
 *
 * The anatomical location at which two or more bones make contact.
 */
class Joint
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Joint";

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
    public static function biomechnicalClass()
    {
        return BiomechnicalClass::create(self::schemaUrl());
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
    public static function functionalClass()
    {
        return FunctionalClass::create(self::schemaUrl());
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
    public static function structuralClass()
    {
        return StructuralClass::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function study()
    {
        return Study::create(MedicalEntity::schemaUrl());
    }
}