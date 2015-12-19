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
 * @method static \NilPortugues\SchemaOrg\Properties\FollowupProperty followup()
 * @method static \NilPortugues\SchemaOrg\Properties\HowPerformedProperty howPerformed()
 * @method static \NilPortugues\SchemaOrg\Properties\PreparationProperty preparation()
 * @method static \NilPortugues\SchemaOrg\Properties\ProcedureTypeProperty procedureType()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeProperty code()
 * @method static \NilPortugues\SchemaOrg\Properties\GuidelineProperty guideline()
 * @method static \NilPortugues\SchemaOrg\Properties\MedicineSystemProperty medicineSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty recognizingAuthority()
 * @method static \NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty relevantSpecialty()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyProperty study()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * @method static \NilPortugues\SchemaOrg\Properties\AffectedByProperty affectedBy()
 * @method static \NilPortugues\SchemaOrg\Properties\NormalRangeProperty normalRange()
 * @method static \NilPortugues\SchemaOrg\Properties\SignDetectedProperty signDetected()
 * @method static \NilPortugues\SchemaOrg\Properties\UsedToDiagnoseProperty usedToDiagnose()
 * @method static \NilPortugues\SchemaOrg\Properties\UsesDeviceProperty usesDevice()
 * METHODEND.
 *
 * A medical procedure intended primarily for diagnostic, as opposed to therapeutic, purposes.
 */
class DiagnosticProcedure extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/DiagnosticProcedure';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'affectedBy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AffectedByProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTest',
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
        'followup' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FollowupProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalProcedure',
        ],
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'howPerformed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HowPerformedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalProcedure',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
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
        'normalRange' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NormalRangeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTest',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'preparation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PreparationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalProcedure',
        ],
        'procedureType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProcedureTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalProcedure',
        ],
        'recognizingAuthority' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'relevantSpecialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'signDetected' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SignDetectedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTest',
        ],
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'usedToDiagnose' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UsedToDiagnoseProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTest',
        ],
        'usesDevice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UsesDeviceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTest',
        ],
    ];
}
