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
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AdverseOutcomeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\AssociatedAnatomyProperty;
use NilPortugues\SchemaOrg\Properties\CategoryProperty;
use NilPortugues\SchemaOrg\Properties\ContraindicationProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\DuplicateTherapyProperty;
use NilPortugues\SchemaOrg\Properties\EpidemiologyProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\IndicationProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PathophysiologyProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcomeProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;

/**
 * Classes PhysicalActivity.
 */
class PhysicalActivity
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/PhysicalActivity';

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
    public static function additionalType()
    {
        return AdditionalTypeProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function adverseOutcome()
    {
        return AdverseOutcomeProperty::create(MedicalTherapy::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternateName()
    {
        return AlternateNameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function associatedAnatomy()
    {
        return AssociatedAnatomyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function category()
    {
        return CategoryProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contraindication()
    {
        return ContraindicationProperty::create(MedicalTherapy::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function description()
    {
        return DescriptionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function duplicateTherapy()
    {
        return DuplicateTherapyProperty::create(MedicalTherapy::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function epidemiology()
    {
        return EpidemiologyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function indication()
    {
        return IndicationProperty::create(MedicalTherapy::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function name()
    {
        return NameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pathophysiology()
    {
        return PathophysiologyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function potentialAction()
    {
        return PotentialActionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sameAs()
    {
        return SameAsProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function seriousAdverseOutcome()
    {
        return SeriousAdverseOutcomeProperty::create(MedicalTherapy::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
