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
use NilPortugues\SchemaOrg\Properties\CodeProperty;
use NilPortugues\SchemaOrg\Properties\GuidelineProperty;
use NilPortugues\SchemaOrg\Properties\InfectiousAgentClassProperty;
use NilPortugues\SchemaOrg\Properties\InfectiousAgentProperty;
use NilPortugues\SchemaOrg\Properties\MedicineSystemProperty;
use NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty;
use NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty;
use NilPortugues\SchemaOrg\Properties\StudyProperty;
use NilPortugues\SchemaOrg\Properties\TransmissionMethodProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes InfectiousDisease.
 */
class InfectiousDisease extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/InfectiousDisease';

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
    public static function infectiousAgent()
    {
        return InfectiousAgentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function infectiousAgentClass()
    {
        return InfectiousAgentClassProperty::create(self::schemaUrl());
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

    /**
     * @return Mapping
     */
    public static function transmissionMethod()
    {
        return TransmissionMethodProperty::create(self::schemaUrl());
    }
}
