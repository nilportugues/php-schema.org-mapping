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
 * METHODEND.
 *
 * Web page type: Collection page.
 */
class CollectionPage extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/CollectionPage';

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
        'aggregateRating' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AggregateRatingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'alternativeHeadline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternativeHeadlineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
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
        'discussionUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DiscussionUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
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
        'encoding' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EncodingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'encodings' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EncodingsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'exampleOfWork' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExampleOfWorkProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
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
        'mentions' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MentionsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'offers' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OffersProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'position' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PositionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'producer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProducerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
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
        'review' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'reviews' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
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
        'version' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VersionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'video' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VideoProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'workExample' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WorkExampleProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
    ];
}
