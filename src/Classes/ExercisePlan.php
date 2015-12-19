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
use NilPortugues\SchemaOrg\Properties\ActivityDurationProperty;
use NilPortugues\SchemaOrg\Properties\ActivityFrequencyProperty;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AdditionalVariableProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\CodeProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\ExerciseTypeProperty;
use NilPortugues\SchemaOrg\Properties\GuidelineProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\IntensityProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\MedicineSystemProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty;
use NilPortugues\SchemaOrg\Properties\RepetitionsProperty;
use NilPortugues\SchemaOrg\Properties\RestPeriodsProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\StudyProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\Properties\WorkloadProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes ExercisePlan.
 */
class ExercisePlan extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/ExercisePlan';

    /**
     * @return Mapping
     */
    public static function activityDuration()
    {
        return ActivityDurationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function activityFrequency()
    {
        return ActivityFrequencyProperty::create(self::schemaUrl());
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
    public static function additionalVariable()
    {
        return AdditionalVariableProperty::create(self::schemaUrl());
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
    public static function code()
    {
        return CodeProperty::create(MedicalEntity::schemaUrl());
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
    public static function exerciseType()
    {
        return ExerciseTypeProperty::create(self::schemaUrl());
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
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function intensity()
    {
        return IntensityProperty::create(self::schemaUrl());
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
    public static function medicineSystem()
    {
        return MedicineSystemProperty::create(MedicalEntity::schemaUrl());
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
    public static function potentialAction()
    {
        return PotentialActionProperty::create(Thing::schemaUrl());
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
    public static function relevantSpecialty()
    {
        return RelevantSpecialtyProperty::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function repetitions()
    {
        return RepetitionsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function restPeriods()
    {
        return RestPeriodsProperty::create(self::schemaUrl());
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
    public static function study()
    {
        return StudyProperty::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function workload()
    {
        return WorkloadProperty::create(self::schemaUrl());
    }
}
