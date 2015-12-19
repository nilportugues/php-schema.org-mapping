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

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\CaptionProperty caption()
 * @method static \NilPortugues\SchemaOrg\Properties\ExifDataProperty exifData()
 * @method static \NilPortugues\SchemaOrg\Properties\RepresentativeOfPageProperty representativeOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\ThumbnailProperty thumbnail()
 * @method static \NilPortugues\SchemaOrg\Properties\AssociatedArticleProperty associatedArticle()
 * @method static \NilPortugues\SchemaOrg\Properties\BitrateProperty bitrate()
 * @method static \NilPortugues\SchemaOrg\Properties\ContentSizeProperty contentSize()
 * @method static \NilPortugues\SchemaOrg\Properties\ContentUrlProperty contentUrl()
 * @method static \NilPortugues\SchemaOrg\Properties\DurationProperty duration()
 * @method static \NilPortugues\SchemaOrg\Properties\EmbedUrlProperty embedUrl()
 * @method static \NilPortugues\SchemaOrg\Properties\EncodesCreativeWorkProperty encodesCreativeWork()
 * @method static \NilPortugues\SchemaOrg\Properties\EncodingFormatProperty encodingFormat()
 * @method static \NilPortugues\SchemaOrg\Properties\ExpiresProperty expires()
 * @method static \NilPortugues\SchemaOrg\Properties\HeightProperty height()
 * @method static \NilPortugues\SchemaOrg\Properties\PlayerTypeProperty playerType()
 * @method static \NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty productionCompany()
 * @method static \NilPortugues\SchemaOrg\Properties\RegionsAllowedProperty regionsAllowed()
 * @method static \NilPortugues\SchemaOrg\Properties\RequiresSubscriptionProperty requiresSubscription()
 * @method static \NilPortugues\SchemaOrg\Properties\UploadDateProperty uploadDate()
 * @method static \NilPortugues\SchemaOrg\Properties\WidthProperty width()
 * @method static \NilPortugues\SchemaOrg\Properties\SchemaVersionProperty schemaVersion()
 * @method static \NilPortugues\SchemaOrg\Properties\AboutProperty about()
 * @method static \NilPortugues\SchemaOrg\Properties\AccessibilityAPIProperty accessibilityAPI()
 * @method static \NilPortugues\SchemaOrg\Properties\AccessibilityControlProperty accessibilityControl()
 * @method static \NilPortugues\SchemaOrg\Properties\AccessibilityFeatureProperty accessibilityFeature()
 * @method static \NilPortugues\SchemaOrg\Properties\AccessibilityHazardProperty accessibilityHazard()
 * @method static \NilPortugues\SchemaOrg\Properties\AccountablePersonProperty accountablePerson()
 * @method static \NilPortugues\SchemaOrg\Properties\AggregateRatingProperty aggregateRating()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternativeHeadlineProperty alternativeHeadline()
 * @method static \NilPortugues\SchemaOrg\Properties\AssociatedMediaProperty associatedMedia()
 * @method static \NilPortugues\SchemaOrg\Properties\AudienceProperty audience()
 * @method static \NilPortugues\SchemaOrg\Properties\AudioProperty audio()
 * @method static \NilPortugues\SchemaOrg\Properties\AuthorProperty author()
 * @method static \NilPortugues\SchemaOrg\Properties\AwardProperty award()
 * @method static \NilPortugues\SchemaOrg\Properties\AwardsProperty awards()
 * @method static \NilPortugues\SchemaOrg\Properties\CitationProperty citation()
 * @method static \NilPortugues\SchemaOrg\Properties\CommentProperty comment()
 * @method static \NilPortugues\SchemaOrg\Properties\ContentLocationProperty contentLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\LocationCreatedProperty locationCreated()
 * @method static \NilPortugues\SchemaOrg\Properties\ContentRatingProperty contentRating()
 * @method static \NilPortugues\SchemaOrg\Properties\ContributorProperty contributor()
 * @method static \NilPortugues\SchemaOrg\Properties\CopyrightHolderProperty copyrightHolder()
 * @method static \NilPortugues\SchemaOrg\Properties\CopyrightYearProperty copyrightYear()
 * @method static \NilPortugues\SchemaOrg\Properties\CreatorProperty creator()
 * @method static \NilPortugues\SchemaOrg\Properties\DateCreatedProperty dateCreated()
 * @method static \NilPortugues\SchemaOrg\Properties\DateModifiedProperty dateModified()
 * @method static \NilPortugues\SchemaOrg\Properties\DatePublishedProperty datePublished()
 * @method static \NilPortugues\SchemaOrg\Properties\DiscussionUrlProperty discussionUrl()
 * @method static \NilPortugues\SchemaOrg\Properties\EditorProperty editor()
 * @method static \NilPortugues\SchemaOrg\Properties\EducationalAlignmentProperty educationalAlignment()
 * @method static \NilPortugues\SchemaOrg\Properties\EducationalUseProperty educationalUse()
 * @method static \NilPortugues\SchemaOrg\Properties\EncodingProperty encoding()
 * @method static \NilPortugues\SchemaOrg\Properties\EncodingsProperty encodings()
 * @method static \NilPortugues\SchemaOrg\Properties\FileFormatProperty fileFormat()
 * @method static \NilPortugues\SchemaOrg\Properties\GenreProperty genre()
 * @method static \NilPortugues\SchemaOrg\Properties\HeadlineProperty headline()
 * @method static \NilPortugues\SchemaOrg\Properties\InLanguageProperty inLanguage()
 * @method static \NilPortugues\SchemaOrg\Properties\InteractivityTypeProperty interactivityType()
 * @method static \NilPortugues\SchemaOrg\Properties\IsBasedOnUrlProperty isBasedOnUrl()
 * @method static \NilPortugues\SchemaOrg\Properties\IsFamilyFriendlyProperty isFamilyFriendly()
 * @method static \NilPortugues\SchemaOrg\Properties\IsPartOfProperty isPartOf()
 * @method static \NilPortugues\SchemaOrg\Properties\KeywordsProperty keywords()
 * @method static \NilPortugues\SchemaOrg\Properties\LicenseProperty license()
 * @method static \NilPortugues\SchemaOrg\Properties\LearningResourceTypeProperty learningResourceType()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityProperty mainEntity()
 * @method static \NilPortugues\SchemaOrg\Properties\MentionsProperty mentions()
 * @method static \NilPortugues\SchemaOrg\Properties\OffersProperty offers()
 * @method static \NilPortugues\SchemaOrg\Properties\PositionProperty position()
 * @method static \NilPortugues\SchemaOrg\Properties\ProducerProperty producer()
 * @method static \NilPortugues\SchemaOrg\Properties\PublicationProperty publication()
 * @method static \NilPortugues\SchemaOrg\Properties\PublisherProperty publisher()
 * @method static \NilPortugues\SchemaOrg\Properties\PublishingPrinciplesProperty publishingPrinciples()
 * @method static \NilPortugues\SchemaOrg\Properties\RecordedAtProperty recordedAt()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewProperty review()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewsProperty reviews()
 * @method static \NilPortugues\SchemaOrg\Properties\SourceOrganizationProperty sourceOrganization()
 * @method static \NilPortugues\SchemaOrg\Properties\TextProperty text()
 * @method static \NilPortugues\SchemaOrg\Properties\ThumbnailUrlProperty thumbnailUrl()
 * @method static \NilPortugues\SchemaOrg\Properties\TimeRequiredProperty timeRequired()
 * @method static \NilPortugues\SchemaOrg\Properties\TypicalAgeRangeProperty typicalAgeRange()
 * @method static \NilPortugues\SchemaOrg\Properties\VersionProperty version()
 * @method static \NilPortugues\SchemaOrg\Properties\VideoProperty video()
 * @method static \NilPortugues\SchemaOrg\Properties\ProviderProperty provider()
 * @method static \NilPortugues\SchemaOrg\Properties\CommentCountProperty commentCount()
 * @method static \NilPortugues\SchemaOrg\Properties\HasPartProperty hasPart()
 * @method static \NilPortugues\SchemaOrg\Properties\WorkExampleProperty workExample()
 * @method static \NilPortugues\SchemaOrg\Properties\ExampleOfWorkProperty exampleOfWork()
 * @method static \NilPortugues\SchemaOrg\Properties\CharacterProperty character()
 * @method static \NilPortugues\SchemaOrg\Properties\TranslatorProperty translator()
 * @method static \NilPortugues\SchemaOrg\Properties\InteractionStatisticProperty interactionStatistic()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * METHODEND.
 *
 * An image file.
 */
class ImageObject extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/ImageObject';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'about' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AboutProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'accessibilityAPI' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AccessibilityAPIProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'accessibilityControl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AccessibilityControlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'accessibilityFeature' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AccessibilityFeatureProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'accessibilityHazard' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AccessibilityHazardProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'accountablePerson' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AccountablePersonProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'aggregateRating' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AggregateRatingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternativeHeadline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternativeHeadlineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'associatedArticle' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AssociatedArticleProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'associatedMedia' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AssociatedMediaProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'audience' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AudienceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'audio' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AudioProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'author' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AuthorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'award' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AwardProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'awards' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AwardsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'bitrate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BitrateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'caption' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CaptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ImageObject',
        ],
        'character' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CharacterProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'citation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CitationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'comment' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CommentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'commentCount' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CommentCountProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'contentLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContentLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'contentRating' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContentRatingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'contentSize' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContentSizeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'contentUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContentUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'contributor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContributorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'copyrightHolder' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CopyrightHolderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'copyrightYear' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CopyrightYearProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'creator' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CreatorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'dateCreated' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DateCreatedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'dateModified' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DateModifiedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'datePublished' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DatePublishedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'discussionUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DiscussionUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'duration' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DurationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'editor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EditorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'educationalAlignment' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EducationalAlignmentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'educationalUse' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EducationalUseProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'embedUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EmbedUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'encodesCreativeWork' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EncodesCreativeWorkProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'encoding' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EncodingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'encodingFormat' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EncodingFormatProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'encodings' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EncodingsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'exampleOfWork' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExampleOfWorkProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'exifData' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExifDataProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ImageObject',
        ],
        'expires' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExpiresProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'fileFormat' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FileFormatProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'genre' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GenreProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'hasPart' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HasPartProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'headline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HeadlineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'height' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HeightProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'inLanguage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InLanguageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'interactionStatistic' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InteractionStatisticProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'interactivityType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InteractivityTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'isBasedOnUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsBasedOnUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'isFamilyFriendly' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsFamilyFriendlyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'isPartOf' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsPartOfProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'keywords' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\KeywordsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'learningResourceType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LearningResourceTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'license' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LicenseProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'locationCreated' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LocationCreatedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'mainEntity' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mentions' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MentionsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'offers' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OffersProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'playerType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PlayerTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'position' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PositionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'producer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProducerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'productionCompany' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProductionCompanyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'provider' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProviderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'publication' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PublicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'publisher' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PublisherProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'publishingPrinciples' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PublishingPrinciplesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'recordedAt' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecordedAtProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'regionsAllowed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RegionsAllowedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'representativeOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RepresentativeOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ImageObject',
        ],
        'requiresSubscription' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RequiresSubscriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'review' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'reviews' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'schemaVersion' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SchemaVersionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'sourceOrganization' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SourceOrganizationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'text' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TextProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'thumbnail' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ThumbnailProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ImageObject',
        ],
        'thumbnailUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ThumbnailUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'timeRequired' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TimeRequiredProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'translator' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TranslatorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'typicalAgeRange' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TypicalAgeRangeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'uploadDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UploadDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'version' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VersionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'video' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VideoProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'width' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WidthProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MediaObject',
        ],
        'workExample' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WorkExampleProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
    ];
}
