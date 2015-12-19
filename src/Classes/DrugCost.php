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
use NilPortugues\SchemaOrg\Properties\ApplicableLocationProperty;
use NilPortugues\SchemaOrg\Properties\CodeProperty;
use NilPortugues\SchemaOrg\Properties\CostCategoryProperty;
use NilPortugues\SchemaOrg\Properties\CostCurrencyProperty;
use NilPortugues\SchemaOrg\Properties\CostOriginProperty;
use NilPortugues\SchemaOrg\Properties\CostPerUnitProperty;
use NilPortugues\SchemaOrg\Properties\DrugUnitProperty;
use NilPortugues\SchemaOrg\Properties\GuidelineProperty;
use NilPortugues\SchemaOrg\Properties\MedicineSystemProperty;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty;
use NilPortugues\SchemaOrg\Properties\StudyProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes DrugCost.
 */
class DrugCost extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/DrugCost';

    /**
     * @return Mapping
     */
    public static function applicableLocation()
    {
        return ApplicableLocationProperty::create(self::schemaUrl());
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
    public static function costCategory()
    {
        return CostCategoryProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function costCurrency()
    {
        return CostCurrencyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function costOrigin()
    {
        return CostOriginProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function costPerUnit()
    {
        return CostPerUnitProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function drugUnit()
    {
        return DrugUnitProperty::create(self::schemaUrl());
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
    public static function medicineSystem()
    {
        return MedicineSystemProperty::create(MedicalEntity::schemaUrl());
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
    public static function study()
    {
        return StudyProperty::create(MedicalEntity::schemaUrl());
    }
}
