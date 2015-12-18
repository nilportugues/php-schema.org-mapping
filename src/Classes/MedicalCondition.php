<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\AssociatedAnatomy;
use NilPortugues\SchemaOrg\Properties\Cause;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\DifferentialDiagnosis;
use NilPortugues\SchemaOrg\Properties\Epidemiology;
use NilPortugues\SchemaOrg\Properties\ExpectedPrognosis;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\NaturalProgression;
use NilPortugues\SchemaOrg\Properties\Pathophysiology;
use NilPortugues\SchemaOrg\Properties\PossibleComplication;
use NilPortugues\SchemaOrg\Properties\PossibleTreatment;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\PrimaryPrevention;
use NilPortugues\SchemaOrg\Properties\RiskFactor;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\SecondaryPrevention;
use NilPortugues\SchemaOrg\Properties\SignOrSymptom;
use NilPortugues\SchemaOrg\Properties\Stage;
use NilPortugues\SchemaOrg\Properties\Subtype;
use NilPortugues\SchemaOrg\Properties\TypicalTest;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes MedicalCondition.
 */
class MedicalCondition
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/MedicalCondition';

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
    public static function additionalType()
    {
        return AdditionalType::create(Thing::schemaUrl());
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
    public static function associatedAnatomy()
    {
        return AssociatedAnatomy::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function cause()
    {
        return Cause::create(self::schemaUrl());
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
    public static function differentialDiagnosis()
    {
        return DifferentialDiagnosis::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function epidemiology()
    {
        return Epidemiology::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function expectedPrognosis()
    {
        return ExpectedPrognosis::create(self::schemaUrl());
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
    public static function naturalProgression()
    {
        return NaturalProgression::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pathophysiology()
    {
        return Pathophysiology::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function possibleComplication()
    {
        return PossibleComplication::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function possibleTreatment()
    {
        return PossibleTreatment::create(self::schemaUrl());
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
    public static function primaryPrevention()
    {
        return PrimaryPrevention::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function riskFactor()
    {
        return RiskFactor::create(self::schemaUrl());
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
    public static function secondaryPrevention()
    {
        return SecondaryPrevention::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function signOrSymptom()
    {
        return SignOrSymptom::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function stage()
    {
        return Stage::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function subtype()
    {
        return Subtype::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function typicalTest()
    {
        return TypicalTest::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}
