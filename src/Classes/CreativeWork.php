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
use NilPortugues\SchemaOrg\Properties\AboutProperty;
use NilPortugues\SchemaOrg\Properties\AccessibilityAPIProperty;
use NilPortugues\SchemaOrg\Properties\AccessibilityControlProperty;
use NilPortugues\SchemaOrg\Properties\AccessibilityFeatureProperty;
use NilPortugues\SchemaOrg\Properties\AccessibilityHazardProperty;
use NilPortugues\SchemaOrg\Properties\AccountablePersonProperty;
use NilPortugues\SchemaOrg\Properties\AggregateRatingProperty;
use NilPortugues\SchemaOrg\Properties\AlternativeHeadlineProperty;
use NilPortugues\SchemaOrg\Properties\AssociatedMediaProperty;
use NilPortugues\SchemaOrg\Properties\AudienceProperty;
use NilPortugues\SchemaOrg\Properties\AudioProperty;
use NilPortugues\SchemaOrg\Properties\AuthorProperty;
use NilPortugues\SchemaOrg\Properties\AwardProperty;
use NilPortugues\SchemaOrg\Properties\AwardsProperty;
use NilPortugues\SchemaOrg\Properties\CharacterProperty;
use NilPortugues\SchemaOrg\Properties\CitationProperty;
use NilPortugues\SchemaOrg\Properties\CommentCountProperty;
use NilPortugues\SchemaOrg\Properties\CommentProperty;
use NilPortugues\SchemaOrg\Properties\ContentLocationProperty;
use NilPortugues\SchemaOrg\Properties\ContentRatingProperty;
use NilPortugues\SchemaOrg\Properties\ContributorProperty;
use NilPortugues\SchemaOrg\Properties\CopyrightHolderProperty;
use NilPortugues\SchemaOrg\Properties\CopyrightYearProperty;
use NilPortugues\SchemaOrg\Properties\CreatorProperty;
use NilPortugues\SchemaOrg\Properties\DateCreatedProperty;
use NilPortugues\SchemaOrg\Properties\DateModifiedProperty;
use NilPortugues\SchemaOrg\Properties\DatePublishedProperty;
use NilPortugues\SchemaOrg\Properties\DiscussionUrlProperty;
use NilPortugues\SchemaOrg\Properties\EditorProperty;
use NilPortugues\SchemaOrg\Properties\EducationalAlignmentProperty;
use NilPortugues\SchemaOrg\Properties\EducationalUseProperty;
use NilPortugues\SchemaOrg\Properties\EncodingProperty;
use NilPortugues\SchemaOrg\Properties\EncodingsProperty;
use NilPortugues\SchemaOrg\Properties\ExampleOfWorkProperty;
use NilPortugues\SchemaOrg\Properties\FileFormatProperty;
use NilPortugues\SchemaOrg\Properties\GenreProperty;
use NilPortugues\SchemaOrg\Properties\HasPartProperty;
use NilPortugues\SchemaOrg\Properties\HeadlineProperty;
use NilPortugues\SchemaOrg\Properties\InLanguageProperty;
use NilPortugues\SchemaOrg\Properties\InteractionStatisticProperty;
use NilPortugues\SchemaOrg\Properties\InteractivityTypeProperty;
use NilPortugues\SchemaOrg\Properties\IsBasedOnUrlProperty;
use NilPortugues\SchemaOrg\Properties\IsFamilyFriendlyProperty;
use NilPortugues\SchemaOrg\Properties\IsPartOfProperty;
use NilPortugues\SchemaOrg\Properties\KeywordsProperty;
use NilPortugues\SchemaOrg\Properties\LearningResourceTypeProperty;
use NilPortugues\SchemaOrg\Properties\LicenseProperty;
use NilPortugues\SchemaOrg\Properties\LocationCreatedProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityProperty;
use NilPortugues\SchemaOrg\Properties\MentionsProperty;
use NilPortugues\SchemaOrg\Properties\OffersProperty;
use NilPortugues\SchemaOrg\Properties\PositionProperty;
use NilPortugues\SchemaOrg\Properties\ProducerProperty;
use NilPortugues\SchemaOrg\Properties\ProviderProperty;
use NilPortugues\SchemaOrg\Properties\PublicationProperty;
use NilPortugues\SchemaOrg\Properties\PublisherProperty;
use NilPortugues\SchemaOrg\Properties\PublishingPrinciplesProperty;
use NilPortugues\SchemaOrg\Properties\RecordedAtProperty;
use NilPortugues\SchemaOrg\Properties\ReviewProperty;
use NilPortugues\SchemaOrg\Properties\ReviewsProperty;
use NilPortugues\SchemaOrg\Properties\SchemaVersionProperty;
use NilPortugues\SchemaOrg\Properties\SourceOrganizationProperty;
use NilPortugues\SchemaOrg\Properties\TextProperty;
use NilPortugues\SchemaOrg\Properties\ThumbnailUrlProperty;
use NilPortugues\SchemaOrg\Properties\TimeRequiredProperty;
use NilPortugues\SchemaOrg\Properties\TranslatorProperty;
use NilPortugues\SchemaOrg\Properties\TypicalAgeRangeProperty;
use NilPortugues\SchemaOrg\Properties\VersionProperty;
use NilPortugues\SchemaOrg\Properties\VideoProperty;
use NilPortugues\SchemaOrg\Properties\WorkExampleProperty;

/**
 * Classes CreativeWork.
 */
class CreativeWork
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/CreativeWork';

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
    public static function about()
    {
        return AboutProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function accessibilityAPI()
    {
        return AccessibilityAPIProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function accessibilityControl()
    {
        return AccessibilityControlProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function accessibilityFeature()
    {
        return AccessibilityFeatureProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function accessibilityHazard()
    {
        return AccessibilityHazardProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function accountablePerson()
    {
        return AccountablePersonProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function aggregateRating()
    {
        return AggregateRatingProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternativeHeadline()
    {
        return AlternativeHeadlineProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function associatedMedia()
    {
        return AssociatedMediaProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function audience()
    {
        return AudienceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function audio()
    {
        return AudioProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function author()
    {
        return AuthorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function award()
    {
        return AwardProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function awards()
    {
        return AwardsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function character()
    {
        return CharacterProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function citation()
    {
        return CitationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function comment()
    {
        return CommentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function commentCount()
    {
        return CommentCountProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contentLocation()
    {
        return ContentLocationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contentRating()
    {
        return ContentRatingProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contributor()
    {
        return ContributorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function copyrightHolder()
    {
        return CopyrightHolderProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function copyrightYear()
    {
        return CopyrightYearProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function creator()
    {
        return CreatorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dateCreated()
    {
        return DateCreatedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dateModified()
    {
        return DateModifiedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function datePublished()
    {
        return DatePublishedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function discussionUrl()
    {
        return DiscussionUrlProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function editor()
    {
        return EditorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function educationalAlignment()
    {
        return EducationalAlignmentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function educationalUse()
    {
        return EducationalUseProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function encoding()
    {
        return EncodingProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function encodings()
    {
        return EncodingsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function exampleOfWork()
    {
        return ExampleOfWorkProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function fileFormat()
    {
        return FileFormatProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function genre()
    {
        return GenreProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function hasPart()
    {
        return HasPartProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function headline()
    {
        return HeadlineProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function inLanguage()
    {
        return InLanguageProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function interactionStatistic()
    {
        return InteractionStatisticProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function interactivityType()
    {
        return InteractivityTypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isBasedOnUrl()
    {
        return IsBasedOnUrlProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isFamilyFriendly()
    {
        return IsFamilyFriendlyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isPartOf()
    {
        return IsPartOfProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function keywords()
    {
        return KeywordsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function learningResourceType()
    {
        return LearningResourceTypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function license()
    {
        return LicenseProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function locationCreated()
    {
        return LocationCreatedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntity()
    {
        return MainEntityProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mentions()
    {
        return MentionsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function offers()
    {
        return OffersProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function position()
    {
        return PositionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function producer()
    {
        return ProducerProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function provider()
    {
        return ProviderProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function publication()
    {
        return PublicationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function publisher()
    {
        return PublisherProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function publishingPrinciples()
    {
        return PublishingPrinciplesProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recordedAt()
    {
        return RecordedAtProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function review()
    {
        return ReviewProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reviews()
    {
        return ReviewsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function schemaVersion()
    {
        return SchemaVersionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sourceOrganization()
    {
        return SourceOrganizationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function text()
    {
        return TextProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function thumbnailUrl()
    {
        return ThumbnailUrlProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function timeRequired()
    {
        return TimeRequiredProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function translator()
    {
        return TranslatorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function typicalAgeRange()
    {
        return TypicalAgeRangeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function version()
    {
        return VersionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function video()
    {
        return VideoProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function workExample()
    {
        return WorkExampleProperty::create(self::schemaUrl());
    }
}
