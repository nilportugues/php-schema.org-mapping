<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\Outcome;
use NilPortugues\SchemaOrg\Properties\Population;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Sponsor;
use NilPortugues\SchemaOrg\Properties\Status;
use NilPortugues\SchemaOrg\Properties\StudyLocation;
use NilPortugues\SchemaOrg\Properties\StudySubject;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes MedicalStudy.
 */
class MedicalStudy
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/MedicalStudy';

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
    public static function alternateName()
    {
        return AlternateName::create(Thing::schemaUrl());
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
    public static function outcome()
    {
        return Outcome::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function population()
    {
        return Population::create(self::schemaUrl());
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
    public static function sponsor()
    {
        return Sponsor::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function status()
    {
        return Status::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function studyLocation()
    {
        return StudyLocation::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function studySubject()
    {
        return StudySubject::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}
