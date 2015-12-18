<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\CodeRepository;
use NilPortugues\SchemaOrg\Properties\CodeSampleType;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\ProgrammingLanguage;
use NilPortugues\SchemaOrg\Properties\Runtime;
use NilPortugues\SchemaOrg\Properties\RuntimePlatform;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\SampleType;
use NilPortugues\SchemaOrg\Properties\TargetProduct;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes SoftwareSourceCode.
 */
class SoftwareSourceCode
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/SoftwareSourceCode';

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
    public static function codeRepository()
    {
        return CodeRepository::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function codeSampleType()
    {
        return CodeSampleType::create(self::schemaUrl());
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
    public static function potentialAction()
    {
        return PotentialAction::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function programmingLanguage()
    {
        return ProgrammingLanguage::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function runtime()
    {
        return Runtime::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function runtimePlatform()
    {
        return RuntimePlatform::create(self::schemaUrl());
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
    public static function sampleType()
    {
        return SampleType::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function targetProduct()
    {
        return TargetProduct::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}
