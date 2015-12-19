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
 * @method static \NilPortugues\SchemaOrg\Properties\ActiveIngredientProperty activeIngredient()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailableInProperty availableIn()
 * @method static \NilPortugues\SchemaOrg\Properties\StrengthUnitProperty strengthUnit()
 * @method static \NilPortugues\SchemaOrg\Properties\StrengthValueProperty strengthValue()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeProperty code()
 * @method static \NilPortugues\SchemaOrg\Properties\GuidelineProperty guideline()
 * @method static \NilPortugues\SchemaOrg\Properties\MedicineSystemProperty medicineSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty recognizingAuthority()
 * @method static \NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty relevantSpecialty()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyProperty study()
 * METHODEND.
 *
 * A specific strength in which a medical drug is available in a specific country.
 */
class DrugStrength extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/DrugStrength';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'activeIngredient' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActiveIngredientProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DrugStrength',
        ],
        'availableIn' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailableInProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DrugStrength',
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
        'recognizingAuthority' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'relevantSpecialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'strengthUnit' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StrengthUnitProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DrugStrength',
        ],
        'strengthValue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StrengthValueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DrugStrength',
        ],
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
    ];
}
