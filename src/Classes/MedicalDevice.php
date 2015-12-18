<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AdverseOutcome;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\Contraindication;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\Indication;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PostOp;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\PreOp;
use NilPortugues\SchemaOrg\Properties\Procedure;
use NilPortugues\SchemaOrg\Properties\Purpose;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcome;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes MedicalDevice.
 */
class MedicalDevice
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/MedicalDevice';

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
        return AdverseOutcome::create(self::schemaUrl());
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
    public static function contraindication()
    {
        return Contraindication::create(self::schemaUrl());
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
    public static function image()
    {
        return Image::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function indication()
    {
        return Indication::create(self::schemaUrl());
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
    public static function postOp()
    {
        return PostOp::create(self::schemaUrl());
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
    public static function preOp()
    {
        return PreOp::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function procedure()
    {
        return Procedure::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function purpose()
    {
        return Purpose::create(self::schemaUrl());
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
        return SeriousAdverseOutcome::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}
