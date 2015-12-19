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
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\AssociatedArticleProperty;
use NilPortugues\SchemaOrg\Properties\BitrateProperty;
use NilPortugues\SchemaOrg\Properties\ContentSizeProperty;
use NilPortugues\SchemaOrg\Properties\ContentUrlProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\DurationProperty;
use NilPortugues\SchemaOrg\Properties\EmbedUrlProperty;
use NilPortugues\SchemaOrg\Properties\EncodesCreativeWorkProperty;
use NilPortugues\SchemaOrg\Properties\EncodingFormatProperty;
use NilPortugues\SchemaOrg\Properties\ExpiresProperty;
use NilPortugues\SchemaOrg\Properties\HeightProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PlayerTypeProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty;
use NilPortugues\SchemaOrg\Properties\RegionsAllowedProperty;
use NilPortugues\SchemaOrg\Properties\RequiresSubscriptionProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\UploadDateProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\Properties\WidthProperty;

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
        return AdditionalTypeProperty::create(Thing::schemaUrl());
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
    public static function associatedArticle()
    {
        return AssociatedArticleProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function bitrate()
    {
        return BitrateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contentSize()
    {
        return ContentSizeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contentUrl()
    {
        return ContentUrlProperty::create(self::schemaUrl());
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
    public static function duration()
    {
        return DurationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function embedUrl()
    {
        return EmbedUrlProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function encodesCreativeWork()
    {
        return EncodesCreativeWorkProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function encodingFormat()
    {
        return EncodingFormatProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function expires()
    {
        return ExpiresProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function height()
    {
        return HeightProperty::create(self::schemaUrl());
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
    public static function playerType()
    {
        return PlayerTypeProperty::create(self::schemaUrl());
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
    public static function productionCompany()
    {
        return ProductionCompanyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function regionsAllowed()
    {
        return RegionsAllowedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function requiresSubscription()
    {
        return RequiresSubscriptionProperty::create(self::schemaUrl());
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
    public static function uploadDate()
    {
        return UploadDateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function width()
    {
        return WidthProperty::create(self::schemaUrl());
    }
}
