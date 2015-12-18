<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\About;
use NilPortugues\SchemaOrg\Properties\AccessibilityAPI;
use NilPortugues\SchemaOrg\Properties\AccessibilityControl;
use NilPortugues\SchemaOrg\Properties\AccessibilityFeature;
use NilPortugues\SchemaOrg\Properties\AccessibilityHazard;
use NilPortugues\SchemaOrg\Properties\AccountablePerson;
use NilPortugues\SchemaOrg\Properties\AggregateRating;
use NilPortugues\SchemaOrg\Properties\AlternativeHeadline;
use NilPortugues\SchemaOrg\Properties\AssociatedMedia;
use NilPortugues\SchemaOrg\Properties\Audience;
use NilPortugues\SchemaOrg\Properties\Audio;
use NilPortugues\SchemaOrg\Properties\Author;
use NilPortugues\SchemaOrg\Properties\Award;
use NilPortugues\SchemaOrg\Properties\Awards;
use NilPortugues\SchemaOrg\Properties\Character;
use NilPortugues\SchemaOrg\Properties\Citation;
use NilPortugues\SchemaOrg\Properties\Comment;
use NilPortugues\SchemaOrg\Properties\CommentCount;
use NilPortugues\SchemaOrg\Properties\ContentLocation;
use NilPortugues\SchemaOrg\Properties\ContentRating;
use NilPortugues\SchemaOrg\Properties\Contributor;
use NilPortugues\SchemaOrg\Properties\CopyrightHolder;
use NilPortugues\SchemaOrg\Properties\CopyrightYear;
use NilPortugues\SchemaOrg\Properties\Creator;
use NilPortugues\SchemaOrg\Properties\DateCreated;
use NilPortugues\SchemaOrg\Properties\DateModified;
use NilPortugues\SchemaOrg\Properties\DatePublished;
use NilPortugues\SchemaOrg\Properties\DiscussionUrl;
use NilPortugues\SchemaOrg\Properties\Editor;
use NilPortugues\SchemaOrg\Properties\EducationalAlignment;
use NilPortugues\SchemaOrg\Properties\EducationalUse;
use NilPortugues\SchemaOrg\Properties\Encoding;
use NilPortugues\SchemaOrg\Properties\Encodings;
use NilPortugues\SchemaOrg\Properties\ExampleOfWork;
use NilPortugues\SchemaOrg\Properties\FileFormat;
use NilPortugues\SchemaOrg\Properties\Genre;
use NilPortugues\SchemaOrg\Properties\HasPart;
use NilPortugues\SchemaOrg\Properties\Headline;
use NilPortugues\SchemaOrg\Properties\InLanguage;
use NilPortugues\SchemaOrg\Properties\InteractionStatistic;
use NilPortugues\SchemaOrg\Properties\InteractivityType;
use NilPortugues\SchemaOrg\Properties\IsBasedOnUrl;
use NilPortugues\SchemaOrg\Properties\IsFamilyFriendly;
use NilPortugues\SchemaOrg\Properties\IsPartOf;
use NilPortugues\SchemaOrg\Properties\Keywords;
use NilPortugues\SchemaOrg\Properties\LearningResourceType;
use NilPortugues\SchemaOrg\Properties\License;
use NilPortugues\SchemaOrg\Properties\LocationCreated;
use NilPortugues\SchemaOrg\Properties\MainEntity;
use NilPortugues\SchemaOrg\Properties\Mentions;
use NilPortugues\SchemaOrg\Properties\Offers;
use NilPortugues\SchemaOrg\Properties\Position;
use NilPortugues\SchemaOrg\Properties\Producer;
use NilPortugues\SchemaOrg\Properties\Provider;
use NilPortugues\SchemaOrg\Properties\Publication;
use NilPortugues\SchemaOrg\Properties\Publisher;
use NilPortugues\SchemaOrg\Properties\PublishingPrinciples;
use NilPortugues\SchemaOrg\Properties\RecordedAt;
use NilPortugues\SchemaOrg\Properties\Review;
use NilPortugues\SchemaOrg\Properties\Reviews;
use NilPortugues\SchemaOrg\Properties\SchemaVersion;
use NilPortugues\SchemaOrg\Properties\SourceOrganization;
use NilPortugues\SchemaOrg\Properties\Text;
use NilPortugues\SchemaOrg\Properties\ThumbnailUrl;
use NilPortugues\SchemaOrg\Properties\TimeRequired;
use NilPortugues\SchemaOrg\Properties\Translator;
use NilPortugues\SchemaOrg\Properties\TypicalAgeRange;
use NilPortugues\SchemaOrg\Properties\Version;
use NilPortugues\SchemaOrg\Properties\Video;
use NilPortugues\SchemaOrg\Properties\WorkExample;

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
        return About::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function accessibilityAPI()
    {
        return AccessibilityAPI::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function accessibilityControl()
    {
        return AccessibilityControl::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function accessibilityFeature()
    {
        return AccessibilityFeature::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function accessibilityHazard()
    {
        return AccessibilityHazard::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function accountablePerson()
    {
        return AccountablePerson::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function aggregateRating()
    {
        return AggregateRating::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternativeHeadline()
    {
        return AlternativeHeadline::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function associatedMedia()
    {
        return AssociatedMedia::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function audience()
    {
        return Audience::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function audio()
    {
        return Audio::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function author()
    {
        return Author::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function award()
    {
        return Award::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function awards()
    {
        return Awards::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function character()
    {
        return Character::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function citation()
    {
        return Citation::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function comment()
    {
        return Comment::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function commentCount()
    {
        return CommentCount::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contentLocation()
    {
        return ContentLocation::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contentRating()
    {
        return ContentRating::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contributor()
    {
        return Contributor::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function copyrightHolder()
    {
        return CopyrightHolder::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function copyrightYear()
    {
        return CopyrightYear::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function creator()
    {
        return Creator::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dateCreated()
    {
        return DateCreated::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dateModified()
    {
        return DateModified::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function datePublished()
    {
        return DatePublished::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function discussionUrl()
    {
        return DiscussionUrl::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function editor()
    {
        return Editor::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function educationalAlignment()
    {
        return EducationalAlignment::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function educationalUse()
    {
        return EducationalUse::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function encoding()
    {
        return Encoding::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function encodings()
    {
        return Encodings::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function exampleOfWork()
    {
        return ExampleOfWork::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function fileFormat()
    {
        return FileFormat::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function genre()
    {
        return Genre::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function hasPart()
    {
        return HasPart::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function headline()
    {
        return Headline::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function inLanguage()
    {
        return InLanguage::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function interactionStatistic()
    {
        return InteractionStatistic::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function interactivityType()
    {
        return InteractivityType::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isBasedOnUrl()
    {
        return IsBasedOnUrl::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isFamilyFriendly()
    {
        return IsFamilyFriendly::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isPartOf()
    {
        return IsPartOf::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function keywords()
    {
        return Keywords::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function learningResourceType()
    {
        return LearningResourceType::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function license()
    {
        return License::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function locationCreated()
    {
        return LocationCreated::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntity()
    {
        return MainEntity::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mentions()
    {
        return Mentions::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function offers()
    {
        return Offers::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function position()
    {
        return Position::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function producer()
    {
        return Producer::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function provider()
    {
        return Provider::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function publication()
    {
        return Publication::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function publisher()
    {
        return Publisher::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function publishingPrinciples()
    {
        return PublishingPrinciples::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recordedAt()
    {
        return RecordedAt::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function review()
    {
        return Review::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reviews()
    {
        return Reviews::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function schemaVersion()
    {
        return SchemaVersion::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sourceOrganization()
    {
        return SourceOrganization::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function text()
    {
        return Text::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function thumbnailUrl()
    {
        return ThumbnailUrl::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function timeRequired()
    {
        return TimeRequired::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function translator()
    {
        return Translator::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function typicalAgeRange()
    {
        return TypicalAgeRange::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function version()
    {
        return Version::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function video()
    {
        return Video::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function workExample()
    {
        return WorkExample::create(self::schemaUrl());
    }
}
