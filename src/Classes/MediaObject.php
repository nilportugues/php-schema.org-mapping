<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\AssociatedArticle;
use NilPortugues\SchemaOrg\Properties\Bitrate;
use NilPortugues\SchemaOrg\Properties\ContentSize;
use NilPortugues\SchemaOrg\Properties\ContentUrl;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Duration;
use NilPortugues\SchemaOrg\Properties\EmbedUrl;
use NilPortugues\SchemaOrg\Properties\EncodesCreativeWork;
use NilPortugues\SchemaOrg\Properties\EncodingFormat;
use NilPortugues\SchemaOrg\Properties\Expires;
use NilPortugues\SchemaOrg\Properties\Height;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PlayerType;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\ProductionCompany;
use NilPortugues\SchemaOrg\Properties\RegionsAllowed;
use NilPortugues\SchemaOrg\Properties\RequiresSubscription;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\UploadDate;
use NilPortugues\SchemaOrg\Properties\Url;
use NilPortugues\SchemaOrg\Properties\Width;

/**
 * Classes MediaObject.
 */
class MediaObject
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/MediaObject';

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
    public static function associatedArticle()
    {
        return AssociatedArticle::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function bitrate()
    {
        return Bitrate::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contentSize()
    {
        return ContentSize::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contentUrl()
    {
        return ContentUrl::create(self::schemaUrl());
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
    public static function duration()
    {
        return Duration::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function embedUrl()
    {
        return EmbedUrl::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function encodesCreativeWork()
    {
        return EncodesCreativeWork::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function encodingFormat()
    {
        return EncodingFormat::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function expires()
    {
        return Expires::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function height()
    {
        return Height::create(self::schemaUrl());
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
    public static function playerType()
    {
        return PlayerType::create(self::schemaUrl());
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
    public static function productionCompany()
    {
        return ProductionCompany::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function regionsAllowed()
    {
        return RegionsAllowed::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function requiresSubscription()
    {
        return RequiresSubscription::create(self::schemaUrl());
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
    public static function uploadDate()
    {
        return UploadDate::create(self::schemaUrl());
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
    public static function width()
    {
        return Width::create(self::schemaUrl());
    }
}
