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
 * @method static \NilPortugues\SchemaOrg\Properties\ActionProperty action()
 * @method static \NilPortugues\SchemaOrg\Properties\MuscleActionProperty muscleAction()
 * @method static \NilPortugues\SchemaOrg\Properties\AntagonistProperty antagonist()
 * @method static \NilPortugues\SchemaOrg\Properties\BloodSupplyProperty bloodSupply()
 * @method static \NilPortugues\SchemaOrg\Properties\InsertionProperty insertion()
 * @method static \NilPortugues\SchemaOrg\Properties\NerveProperty nerve()
 * @method static \NilPortugues\SchemaOrg\Properties\OriginProperty origin()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeProperty code()
 * @method static \NilPortugues\SchemaOrg\Properties\GuidelineProperty guideline()
 * @method static \NilPortugues\SchemaOrg\Properties\MedicineSystemProperty medicineSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty recognizingAuthority()
 * @method static \NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty relevantSpecialty()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyProperty study()
 * METHODEND.
 *
 * A muscle is an anatomical structure consisting of a contractile form of tissue that animals use to effect movement.
 */
class Muscle extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Muscle';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'action' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
        ],
        'antagonist' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AntagonistProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
        ],
        'bloodSupply' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BloodSupplyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
        ],
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'insertion' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InsertionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
        ],
        'medicineSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MedicineSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'muscleAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MuscleActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
        ],
        'nerve' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NerveProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
        ],
        'origin' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OriginProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Muscle',
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
    ];
}
