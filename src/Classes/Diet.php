<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AdverseOutcome;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\Contraindication;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\DietFeatures;
use NilPortugues\SchemaOrg\Properties\DuplicateTherapy;
use NilPortugues\SchemaOrg\Properties\Endorsers;
use NilPortugues\SchemaOrg\Properties\ExpertConsiderations;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\Indication;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\Overview;
use NilPortugues\SchemaOrg\Properties\PhysiologicalBenefits;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\ProprietaryName;
use NilPortugues\SchemaOrg\Properties\Risks;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcome;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes Diet
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A strategy of regulating the intake of food to achieve or maintain a specific health-related goal.
 */
class Diet
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Diet";

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
    public static function additionalType()
    {
        return AdditionalType::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function adverseOutcome()
    {
        return AdverseOutcome::create(MedicalTherapy::schemaUrl());
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
    public static function contraindication()
    {
        return Contraindication::create(MedicalTherapy::schemaUrl());
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
    public static function dietFeatures()
    {
        return DietFeatures::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function duplicateTherapy()
    {
        return DuplicateTherapy::create(MedicalTherapy::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function endorsers()
    {
        return Endorsers::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function expertConsiderations()
    {
        return ExpertConsiderations::create(self::schemaUrl());
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
    public static function indication()
    {
        return Indication::create(MedicalTherapy::schemaUrl());
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
    public static function name()
    {
        return Name::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function overview()
    {
        return Overview::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function physiologicalBenefits()
    {
        return PhysiologicalBenefits::create(self::schemaUrl());
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
    public static function proprietaryName()
    {
        return ProprietaryName::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function risks()
    {
        return Risks::create(self::schemaUrl());
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
    public static function seriousAdverseOutcome()
    {
        return SeriousAdverseOutcome::create(MedicalTherapy::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}