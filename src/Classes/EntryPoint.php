<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ActionApplication;
use NilPortugues\SchemaOrg\Properties\ActionPlatform;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\Application;
use NilPortugues\SchemaOrg\Properties\ContentType;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\EncodingType;
use NilPortugues\SchemaOrg\Properties\HttpMethod;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Url;
use NilPortugues\SchemaOrg\Properties\UrlTemplate;

/**
 * Classes EntryPoint.
 */
class EntryPoint
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/EntryPoint';

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
    public static function actionApplication()
    {
        return ActionApplication::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function actionPlatform()
    {
        return ActionPlatform::create(self::schemaUrl());
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
    public static function application()
    {
        return Application::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contentType()
    {
        return ContentType::create(self::schemaUrl());
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
    public static function encodingType()
    {
        return EncodingType::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function httpMethod()
    {
        return HttpMethod::create(self::schemaUrl());
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
    public static function sameAs()
    {
        return SameAs::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function urlTemplate()
    {
        return UrlTemplate::create(self::schemaUrl());
    }
}
