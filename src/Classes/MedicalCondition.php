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
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\AssociatedAnatomyProperty;
use NilPortugues\SchemaOrg\Properties\CauseProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\DifferentialDiagnosisProperty;
use NilPortugues\SchemaOrg\Properties\EpidemiologyProperty;
use NilPortugues\SchemaOrg\Properties\ExpectedPrognosisProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\NaturalProgressionProperty;
use NilPortugues\SchemaOrg\Properties\PathophysiologyProperty;
use NilPortugues\SchemaOrg\Properties\PossibleComplicationProperty;
use NilPortugues\SchemaOrg\Properties\PossibleTreatmentProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\PrimaryPreventionProperty;
use NilPortugues\SchemaOrg\Properties\RiskFactorProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\SecondaryPreventionProperty;
use NilPortugues\SchemaOrg\Properties\SignOrSymptomProperty;
use NilPortugues\SchemaOrg\Properties\StageProperty;
use NilPortugues\SchemaOrg\Properties\SubtypeProperty;
use NilPortugues\SchemaOrg\Properties\TypicalTestProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;

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
        return AdditionalTypeProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternateName()
    {
        return AlternateNameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function associatedAnatomy()
    {
        return AssociatedAnatomyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function cause()
    {
        return CauseProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function description()
    {
        return DescriptionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function differentialDiagnosis()
    {
        return DifferentialDiagnosisProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function epidemiology()
    {
        return EpidemiologyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function expectedPrognosis()
    {
        return ExpectedPrognosisProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function name()
    {
        return NameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function naturalProgression()
    {
        return NaturalProgressionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pathophysiology()
    {
        return PathophysiologyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function possibleComplication()
    {
        return PossibleComplicationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function possibleTreatment()
    {
        return PossibleTreatmentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function potentialAction()
    {
        return PotentialActionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function primaryPrevention()
    {
        return PrimaryPreventionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function riskFactor()
    {
        return RiskFactorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sameAs()
    {
        return SameAsProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function secondaryPrevention()
    {
        return SecondaryPreventionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function signOrSymptom()
    {
        return SignOrSymptomProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function stage()
    {
        return StageProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function subtype()
    {
        return SubtypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function typicalTest()
    {
        return TypicalTestProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
