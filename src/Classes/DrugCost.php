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
 * @method static \NilPortugues\SchemaOrg\Properties\ApplicableLocationProperty applicableLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\CostCategoryProperty costCategory()
 * @method static \NilPortugues\SchemaOrg\Properties\CostCurrencyProperty costCurrency()
 * @method static \NilPortugues\SchemaOrg\Properties\CostOriginProperty costOrigin()
 * @method static \NilPortugues\SchemaOrg\Properties\CostPerUnitProperty costPerUnit()
 * @method static \NilPortugues\SchemaOrg\Properties\DrugUnitProperty drugUnit()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeProperty code()
 * @method static \NilPortugues\SchemaOrg\Properties\GuidelineProperty guideline()
 * @method static \NilPortugues\SchemaOrg\Properties\MedicineSystemProperty medicineSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty recognizingAuthority()
 * @method static \NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty relevantSpecialty()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyProperty study()
 * METHODEND.
 *
 * The cost per unit of a medical drug. Note that this type is not meant to represent the price in an offer of a drug for sale; see the Offer type for that. This type will typically be used to tag wholesale or average retail cost of a drug, or maximum reimbursable cost. Costs of medical drugs vary widely depending on how and where they are paid for, so while this type captures some of the variables, costs should be used with caution by consumers of this schema's markup.
 */
class DrugCost extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/DrugCost';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'applicableLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ApplicableLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DrugCost',
        ],
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'costCategory' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CostCategoryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DrugCost',
        ],
        'costCurrency' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CostCurrencyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DrugCost',
        ],
        'costOrigin' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CostOriginProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DrugCost',
        ],
        'costPerUnit' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CostPerUnitProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DrugCost',
        ],
        'drugUnit' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DrugUnitProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\DrugCost',
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
    ];
}
