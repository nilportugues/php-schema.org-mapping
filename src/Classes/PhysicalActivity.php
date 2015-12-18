<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AdverseOutcome;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\AssociatedAnatomy;
use NilPortugues\SchemaOrg\Properties\Category;
use NilPortugues\SchemaOrg\Properties\Contraindication;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\DuplicateTherapy;
use NilPortugues\SchemaOrg\Properties\Epidemiology;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\Indication;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\Pathophysiology;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcome;
use NilPortugues\SchemaOrg\Properties\Url;

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
        return AdditionalType::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function adverseOutcome()
    {
        return AdverseOutcome::create(MedicalTherapy::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternateName()
    {
        return AlternateName::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function associatedAnatomy()
    {
        return AssociatedAnatomy::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function category()
    {
        return Category::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contraindication()
    {
        return Contraindication::create(MedicalTherapy::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function description()
    {
        return Description::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function duplicateTherapy()
    {
        return DuplicateTherapy::create(MedicalTherapy::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function epidemiology()
    {
        return Epidemiology::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function image()
    {
        return Image::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function indication()
    {
        return Indication::create(MedicalTherapy::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPage::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function name()
    {
        return Name::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pathophysiology()
    {
        return Pathophysiology::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function potentialAction()
    {
        return PotentialAction::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sameAs()
    {
        return SameAs::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function seriousAdverseOutcome()
    {
        return SeriousAdverseOutcome::create(MedicalTherapy::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}
