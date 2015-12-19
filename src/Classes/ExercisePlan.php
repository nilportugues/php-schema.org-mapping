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

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\ActivityDurationProperty activityDuration()
 * @method static \NilPortugues\SchemaOrg\Properties\ActivityFrequencyProperty activityFrequency()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalVariableProperty additionalVariable()
 * @method static \NilPortugues\SchemaOrg\Properties\ExerciseTypeProperty exerciseType()
 * @method static \NilPortugues\SchemaOrg\Properties\IntensityProperty intensity()
 * @method static \NilPortugues\SchemaOrg\Properties\RepetitionsProperty repetitions()
 * @method static \NilPortugues\SchemaOrg\Properties\RestPeriodsProperty restPeriods()
 * @method static \NilPortugues\SchemaOrg\Properties\WorkloadProperty workload()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeProperty code()
 * @method static \NilPortugues\SchemaOrg\Properties\GuidelineProperty guideline()
 * @method static \NilPortugues\SchemaOrg\Properties\MedicineSystemProperty medicineSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty recognizingAuthority()
 * @method static \NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty relevantSpecialty()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyProperty study()
 * METHODEND.
 *
 * Fitness-related activity designed for a specific health-related purpose, including defined exercise routines as well as activity prescribed by a clinician.
 */
class ExercisePlan extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/ExercisePlan';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'activityDuration' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActivityDurationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
        'activityFrequency' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActivityFrequencyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'additionalVariable' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalVariableProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'exerciseType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExerciseTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'intensity' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IntensityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'medicineSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MedicineSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'recognizingAuthority' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'relevantSpecialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'repetitions' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RepetitionsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
        'restPeriods' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RestPeriodsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'workload' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WorkloadProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
    ];
}
