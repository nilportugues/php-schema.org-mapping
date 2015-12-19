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
 * @method static \NilPortugues\SchemaOrg\Properties\ActivityDurationProperty activityDuration()
 * @method static \NilPortugues\SchemaOrg\Properties\ActivityFrequencyProperty activityFrequency()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalVariableProperty additionalVariable()
 * @method static \NilPortugues\SchemaOrg\Properties\ExerciseTypeProperty exerciseType()
 * @method static \NilPortugues\SchemaOrg\Properties\IntensityProperty intensity()
 * @method static \NilPortugues\SchemaOrg\Properties\RepetitionsProperty repetitions()
 * @method static \NilPortugues\SchemaOrg\Properties\RestPeriodsProperty restPeriods()
 * @method static \NilPortugues\SchemaOrg\Properties\WorkloadProperty workload()
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
 * @method static \NilPortugues\SchemaOrg\Properties\AssociatedAnatomyProperty associatedAnatomy()
 * @method static \NilPortugues\SchemaOrg\Properties\CategoryProperty category()
 * @method static \NilPortugues\SchemaOrg\Properties\EpidemiologyProperty epidemiology()
 * @method static \NilPortugues\SchemaOrg\Properties\PathophysiologyProperty pathophysiology()
 * @method static \NilPortugues\SchemaOrg\Properties\AdverseOutcomeProperty adverseOutcome()
 * @method static \NilPortugues\SchemaOrg\Properties\ContraindicationProperty contraindication()
 * @method static \NilPortugues\SchemaOrg\Properties\DuplicateTherapyProperty duplicateTherapy()
 * @method static \NilPortugues\SchemaOrg\Properties\IndicationProperty indication()
 * @method static \NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcomeProperty seriousAdverseOutcome()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeProperty code()
 * @method static \NilPortugues\SchemaOrg\Properties\GuidelineProperty guideline()
 * @method static \NilPortugues\SchemaOrg\Properties\MedicineSystemProperty medicineSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty recognizingAuthority()
 * @method static \NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty relevantSpecialty()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyProperty study()
 * METHODEND.
 *
 * Fitness-related activity designed for a specific health-related purpose, including defined exercise routines as well as activity prescribed by a clinician.
 */
class ExercisePlan extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/ExercisePlan';

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
        'activityDuration' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActivityDurationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
        'activityFrequency' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActivityFrequencyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'additionalVariable' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalVariableProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
        'adverseOutcome' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdverseOutcomeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
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
        'associatedAnatomy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AssociatedAnatomyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PhysicalActivity',
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
        'category' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CategoryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PhysicalActivity',
        ],
        'character' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CharacterProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'citation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CitationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
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
        'contraindication' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContraindicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
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
        'duplicateTherapy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DuplicateTherapyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
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
        'epidemiology' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EpidemiologyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PhysicalActivity',
        ],
        'exampleOfWork' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExampleOfWorkProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'exerciseType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExerciseTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
        'fileFormat' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FileFormatProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'genre' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GenreProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'hasPart' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HasPartProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'headline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HeadlineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'inLanguage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InLanguageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'indication' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IndicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'intensity' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IntensityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
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
        'medicineSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MedicineSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
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
        'pathophysiology' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PathophysiologyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PhysicalActivity',
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
        'recognizingAuthority' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'recordedAt' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecordedAtProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'relevantSpecialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'repetitions' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RepetitionsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
        'restPeriods' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RestPeriodsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
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
        'seriousAdverseOutcome' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcomeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'sourceOrganization' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SourceOrganizationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
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
        'workExample' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WorkExampleProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\CreativeWork',
        ],
        'workload' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WorkloadProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ExercisePlan',
        ],
    ];
}
