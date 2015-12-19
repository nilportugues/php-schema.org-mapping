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
 * @method static \NilPortugues\SchemaOrg\Properties\AdverseOutcomeProperty adverseOutcome()
 * @method static \NilPortugues\SchemaOrg\Properties\ContraindicationProperty contraindication()
 * @method static \NilPortugues\SchemaOrg\Properties\IndicationProperty indication()
 * @method static \NilPortugues\SchemaOrg\Properties\PostOpProperty postOp()
 * @method static \NilPortugues\SchemaOrg\Properties\PreOpProperty preOp()
 * @method static \NilPortugues\SchemaOrg\Properties\ProcedureProperty procedure()
 * @method static \NilPortugues\SchemaOrg\Properties\PurposeProperty purpose()
 * @method static \NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcomeProperty seriousAdverseOutcome()
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
 * METHODEND.
 *
 * Any object used in a medical capacity, such as to diagnose or treat a patient.
 */
class MedicalDevice extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/MedicalDevice';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'adverseOutcome' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdverseOutcomeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalDevice',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'contraindication' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContraindicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalDevice',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'indication' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IndicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalDevice',
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
        'postOp' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PostOpProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalDevice',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'preOp' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PreOpProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalDevice',
        ],
        'procedure' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProcedureProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalDevice',
        ],
        'purpose' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PurposeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalDevice',
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
        'seriousAdverseOutcome' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcomeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalDevice',
        ],
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
