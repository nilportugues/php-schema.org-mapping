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
 * @method static \NilPortugues\SchemaOrg\Properties\DoseUnitProperty doseUnit()
 * @method static \NilPortugues\SchemaOrg\Properties\DoseValueProperty doseValue()
 * @method static \NilPortugues\SchemaOrg\Properties\FrequencyProperty frequency()
 * @method static \NilPortugues\SchemaOrg\Properties\TargetPopulationProperty targetPopulation()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeProperty code()
 * @method static \NilPortugues\SchemaOrg\Properties\GuidelineProperty guideline()
 * @method static \NilPortugues\SchemaOrg\Properties\MedicineSystemProperty medicineSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty recognizingAuthority()
 * @method static \NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty relevantSpecialty()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyProperty study()
 * METHODEND.
 *
 * A specific dosing schedule for a drug or supplement.
 */
class DoseSchedule extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/DoseSchedule';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'doseUnit' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DoseUnitProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DoseSchedule',
        ],
        'doseValue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DoseValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DoseSchedule',
        ],
        'frequency' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FrequencyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DoseSchedule',
        ],
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'medicineSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MedicineSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'recognizingAuthority' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'relevantSpecialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'targetPopulation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TargetPopulationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DoseSchedule',
        ],
    ];
}
