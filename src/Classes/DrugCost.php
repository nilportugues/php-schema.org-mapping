<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ApplicableLocation;
use NilPortugues\SchemaOrg\Properties\Code;
use NilPortugues\SchemaOrg\Properties\CostCategory;
use NilPortugues\SchemaOrg\Properties\CostCurrency;
use NilPortugues\SchemaOrg\Properties\CostOrigin;
use NilPortugues\SchemaOrg\Properties\CostPerUnit;
use NilPortugues\SchemaOrg\Properties\DrugUnit;
use NilPortugues\SchemaOrg\Properties\Guideline;
use NilPortugues\SchemaOrg\Properties\MedicineSystem;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthority;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialty;
use NilPortugues\SchemaOrg\Properties\Study;

/**
 * Classes DrugCost.
 */
class DrugCost
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/DrugCost';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

    /**
     * @return Mapping
     */
    public static function applicableLocation()
    {
        return ApplicableLocation::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function code()
    {
        return Code::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function costCategory()
    {
        return CostCategory::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function costCurrency()
    {
        return CostCurrency::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function costOrigin()
    {
        return CostOrigin::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function costPerUnit()
    {
        return CostPerUnit::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function drugUnit()
    {
        return DrugUnit::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function guideline()
    {
        return Guideline::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function medicineSystem()
    {
        return MedicineSystem::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recognizingAuthority()
    {
        return RecognizingAuthority::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function relevantSpecialty()
    {
        return RelevantSpecialty::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function study()
    {
        return Study::create(MedicalEntity::schemaUrl());
    }
}
