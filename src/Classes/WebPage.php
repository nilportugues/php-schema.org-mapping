<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\Breadcrumb;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\LastReviewed;
use NilPortugues\SchemaOrg\Properties\MainContentOfPage;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\PrimaryImageOfPage;
use NilPortugues\SchemaOrg\Properties\RelatedLink;
use NilPortugues\SchemaOrg\Properties\ReviewedBy;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\SignificantLink;
use NilPortugues\SchemaOrg\Properties\SignificantLinks;
use NilPortugues\SchemaOrg\Properties\Specialty;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes WebPage.
 */
class WebPage
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/WebPage';

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
    public static function breadcrumb()
    {
        return Breadcrumb::create(self::schemaUrl());
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
    public static function lastReviewed()
    {
        return LastReviewed::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainContentOfPage()
    {
        return MainContentOfPage::create(self::schemaUrl());
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
    public static function primaryImageOfPage()
    {
        return PrimaryImageOfPage::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function relatedLink()
    {
        return RelatedLink::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reviewedBy()
    {
        return ReviewedBy::create(self::schemaUrl());
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
    public static function significantLink()
    {
        return SignificantLink::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function significantLinks()
    {
        return SignificantLinks::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function specialty()
    {
        return Specialty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}
