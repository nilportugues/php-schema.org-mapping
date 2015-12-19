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
use NilPortugues\SchemaOrg\Properties\ActionProperty;
use NilPortugues\SchemaOrg\Properties\AntagonistProperty;
use NilPortugues\SchemaOrg\Properties\BloodSupplyProperty;
use NilPortugues\SchemaOrg\Properties\CodeProperty;
use NilPortugues\SchemaOrg\Properties\GuidelineProperty;
use NilPortugues\SchemaOrg\Properties\InsertionProperty;
use NilPortugues\SchemaOrg\Properties\MedicineSystemProperty;
use NilPortugues\SchemaOrg\Properties\MuscleActionProperty;
use NilPortugues\SchemaOrg\Properties\NerveProperty;
use NilPortugues\SchemaOrg\Properties\OriginProperty;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty;
use NilPortugues\SchemaOrg\Properties\StudyProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes Muscle.
 */
class Muscle extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Muscle';

    /**
     * @return Mapping
     */
    public static function action()
    {
        return ActionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function antagonist()
    {
        return AntagonistProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function bloodSupply()
    {
        return BloodSupplyProperty::create(self::schemaUrl());
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
    public static function guideline()
    {
        return GuidelineProperty::create(MedicalEntity::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function insertion()
    {
        return InsertionProperty::create(self::schemaUrl());
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
    public static function muscleAction()
    {
        return MuscleActionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function nerve()
    {
        return NerveProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function origin()
    {
        return OriginProperty::create(self::schemaUrl());
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
