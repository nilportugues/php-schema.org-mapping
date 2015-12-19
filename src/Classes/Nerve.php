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
 * @method static \NilPortugues\SchemaOrg\Properties\BranchProperty branch()
 * @method static \NilPortugues\SchemaOrg\Properties\NerveMotorProperty nerveMotor()
 * @method static \NilPortugues\SchemaOrg\Properties\SensoryUnitProperty sensoryUnit()
 * @method static \NilPortugues\SchemaOrg\Properties\SourcedFromProperty sourcedFrom()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeProperty code()
 * @method static \NilPortugues\SchemaOrg\Properties\GuidelineProperty guideline()
 * @method static \NilPortugues\SchemaOrg\Properties\MedicineSystemProperty medicineSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty recognizingAuthority()
 * @method static \NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty relevantSpecialty()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyProperty study()
 * METHODEND.
 *
 * A common pathway for the electrochemical nerve impulses that are transmitted along each of the axons.
 */
class Nerve extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Nerve';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'branch' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BranchProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Nerve',
        ],
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'medicineSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MedicineSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'nerveMotor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NerveMotorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Nerve',
        ],
        'recognizingAuthority' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'relevantSpecialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'sensoryUnit' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SensoryUnitProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Nerve',
        ],
        'sourcedFrom' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SourcedFromProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Nerve',
        ],
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
    ];
}
