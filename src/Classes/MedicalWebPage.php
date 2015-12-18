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
use NilPortugues\SchemaOrg\Properties\Aspect;
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
 * Classes MedicalWebPage
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A web page that provides medical information.
 */
class MedicalWebPage
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/MedicalWebPage";

   /**
    * Returns the URL of the current definition at http://schema.org
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
        return About::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function accessibilityAPI()
    {
        return AccessibilityAPI::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function accessibilityControl()
    {
        return AccessibilityControl::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function accessibilityFeature()
    {
        return AccessibilityFeature::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function accessibilityHazard()
    {
        return AccessibilityHazard::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function accountablePerson()
    {
        return AccountablePerson::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function aggregateRating()
    {
        return AggregateRating::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function alternativeHeadline()
    {
        return AlternativeHeadline::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function aspect()
    {
        return Aspect::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function associatedMedia()
    {
        return AssociatedMedia::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function audience()
    {
        return Audience::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function audio()
    {
        return Audio::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function author()
    {
        return Author::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function award()
    {
        return Award::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function awards()
    {
        return Awards::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function character()
    {
        return Character::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function citation()
    {
        return Citation::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function comment()
    {
        return Comment::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function commentCount()
    {
        return CommentCount::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function contentLocation()
    {
        return ContentLocation::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function contentRating()
    {
        return ContentRating::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function contributor()
    {
        return Contributor::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function copyrightHolder()
    {
        return CopyrightHolder::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function copyrightYear()
    {
        return CopyrightYear::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function creator()
    {
        return Creator::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function dateCreated()
    {
        return DateCreated::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function dateModified()
    {
        return DateModified::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function datePublished()
    {
        return DatePublished::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function discussionUrl()
    {
        return DiscussionUrl::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function editor()
    {
        return Editor::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function educationalAlignment()
    {
        return EducationalAlignment::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function educationalUse()
    {
        return EducationalUse::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function encoding()
    {
        return Encoding::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function encodings()
    {
        return Encodings::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function exampleOfWork()
    {
        return ExampleOfWork::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function fileFormat()
    {
        return FileFormat::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function genre()
    {
        return Genre::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function hasPart()
    {
        return HasPart::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function headline()
    {
        return Headline::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function inLanguage()
    {
        return InLanguage::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function interactionStatistic()
    {
        return InteractionStatistic::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function interactivityType()
    {
        return InteractivityType::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function isBasedOnUrl()
    {
        return IsBasedOnUrl::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function isFamilyFriendly()
    {
        return IsFamilyFriendly::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function isPartOf()
    {
        return IsPartOf::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function keywords()
    {
        return Keywords::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function learningResourceType()
    {
        return LearningResourceType::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function license()
    {
        return License::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function locationCreated()
    {
        return LocationCreated::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function mainEntity()
    {
        return MainEntity::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function mentions()
    {
        return Mentions::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function offers()
    {
        return Offers::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function position()
    {
        return Position::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function producer()
    {
        return Producer::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function provider()
    {
        return Provider::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function publication()
    {
        return Publication::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function publisher()
    {
        return Publisher::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function publishingPrinciples()
    {
        return PublishingPrinciples::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function recordedAt()
    {
        return RecordedAt::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function review()
    {
        return Review::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function reviews()
    {
        return Reviews::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function schemaVersion()
    {
        return SchemaVersion::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function sourceOrganization()
    {
        return SourceOrganization::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function text()
    {
        return Text::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function thumbnailUrl()
    {
        return ThumbnailUrl::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function timeRequired()
    {
        return TimeRequired::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function translator()
    {
        return Translator::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function typicalAgeRange()
    {
        return TypicalAgeRange::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function version()
    {
        return Version::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function video()
    {
        return Video::create(CreativeWork::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function workExample()
    {
        return WorkExample::create(CreativeWork::schemaUrl());
    }
}