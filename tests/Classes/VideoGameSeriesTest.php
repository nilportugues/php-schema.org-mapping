<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\VideoGameSeries;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes VideoGameSeriesTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class VideoGameSeriesTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(VideoGameSeries::schemaUrl(), "http://schema.org/VideoGameSeries");
    }

    public function testAboutWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::about());
    }

    public function testAccessibilityAPIWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::accessibilityAPI());
    }

    public function testAccessibilityControlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::accessibilityControl());
    }

    public function testAccessibilityFeatureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::accessibilityFeature());
    }

    public function testAccessibilityHazardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::accessibilityHazard());
    }

    public function testAccountablePersonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::accountablePerson());
    }

    public function testActorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::actor());
    }

    public function testActorsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::actors());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::aggregateRating());
    }

    public function testAlternativeHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::alternativeHeadline());
    }

    public function testAssociatedMediaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::associatedMedia());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::audience());
    }

    public function testAudioWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::audio());
    }

    public function testAuthorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::author());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::awards());
    }

    public function testCharacterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::character());
    }

    public function testCharacterAttributeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::characterAttribute());
    }

    public function testCheatCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::cheatCode());
    }

    public function testCitationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::citation());
    }

    public function testCommentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::comment());
    }

    public function testCommentCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::commentCount());
    }

    public function testContainsSeasonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::containsSeason());
    }

    public function testContentLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::contentLocation());
    }

    public function testContentRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::contentRating());
    }

    public function testContributorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::contributor());
    }

    public function testCopyrightHolderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::copyrightHolder());
    }

    public function testCopyrightYearWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::copyrightYear());
    }

    public function testCreatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::creator());
    }

    public function testDateCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::dateCreated());
    }

    public function testDateModifiedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::dateModified());
    }

    public function testDatePublishedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::datePublished());
    }

    public function testDirectorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::director());
    }

    public function testDirectorsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::directors());
    }

    public function testDiscussionUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::discussionUrl());
    }

    public function testEditorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::editor());
    }

    public function testEducationalAlignmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::educationalAlignment());
    }

    public function testEducationalUseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::educationalUse());
    }

    public function testEncodingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::encoding());
    }

    public function testEncodingsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::encodings());
    }

    public function testEpisodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::episode());
    }

    public function testEpisodesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::episodes());
    }

    public function testExampleOfWorkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::exampleOfWork());
    }

    public function testFileFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::fileFormat());
    }

    public function testGameItemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::gameItem());
    }

    public function testGameLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::gameLocation());
    }

    public function testGamePlatformWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::gamePlatform());
    }

    public function testGenreWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::genre());
    }

    public function testHasPartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::hasPart());
    }

    public function testHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::headline());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::inLanguage());
    }

    public function testInteractionStatisticWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::interactionStatistic());
    }

    public function testInteractivityTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::interactivityType());
    }

    public function testIsBasedOnUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::isBasedOnUrl());
    }

    public function testIsFamilyFriendlyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::isFamilyFriendly());
    }

    public function testIsPartOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::isPartOf());
    }

    public function testKeywordsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::keywords());
    }

    public function testLearningResourceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::learningResourceType());
    }

    public function testLicenseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::license());
    }

    public function testLocationCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::locationCreated());
    }

    public function testMainEntityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::mainEntity());
    }

    public function testMentionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::mentions());
    }

    public function testMusicByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::musicBy());
    }

    public function testNumberOfEpisodesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::numberOfEpisodes());
    }

    public function testNumberOfPlayersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::numberOfPlayers());
    }

    public function testNumberOfSeasonsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::numberOfSeasons());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::offers());
    }

    public function testPlayModeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::playMode());
    }

    public function testPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::position());
    }

    public function testProducerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::producer());
    }

    public function testProductionCompanyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::productionCompany());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::provider());
    }

    public function testPublicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::publication());
    }

    public function testPublisherWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::publisher());
    }

    public function testPublishingPrinciplesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::publishingPrinciples());
    }

    public function testQuestWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::quest());
    }

    public function testRecordedAtWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::recordedAt());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::reviews());
    }

    public function testSchemaVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::schemaVersion());
    }

    public function testSeasonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::season());
    }

    public function testSeasonsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::seasons());
    }

    public function testSourceOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::sourceOrganization());
    }

    public function testTextWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::text());
    }

    public function testThumbnailUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::thumbnailUrl());
    }

    public function testTimeRequiredWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::timeRequired());
    }

    public function testTrailerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::trailer());
    }

    public function testTranslatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::translator());
    }

    public function testTypicalAgeRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::typicalAgeRange());
    }

    public function testVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::version());
    }

    public function testVideoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::video());
    }

    public function testWorkExampleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGameSeries::workExample());
    }
}