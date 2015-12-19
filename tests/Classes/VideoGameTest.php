<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\VideoGame;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes VideoGameTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class VideoGameTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(VideoGame::schemaUrl(), "http://schema.org/VideoGame");
    }

    public function testAboutWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::about());
    }

    public function testAccessibilityAPIWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::accessibilityAPI());
    }

    public function testAccessibilityControlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::accessibilityControl());
    }

    public function testAccessibilityFeatureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::accessibilityFeature());
    }

    public function testAccessibilityHazardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::accessibilityHazard());
    }

    public function testAccountablePersonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::accountablePerson());
    }

    public function testActorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::actor());
    }

    public function testActorsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::actors());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::additionalType());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::alternateName());
    }

    public function testAlternativeHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::alternativeHeadline());
    }

    public function testApplicationCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::applicationCategory());
    }

    public function testApplicationSubCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::applicationSubCategory());
    }

    public function testApplicationSuiteWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::applicationSuite());
    }

    public function testAssociatedMediaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::associatedMedia());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::audience());
    }

    public function testAudioWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::audio());
    }

    public function testAuthorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::author());
    }

    public function testAvailableOnDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::availableOnDevice());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::awards());
    }

    public function testCharacterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::character());
    }

    public function testCharacterAttributeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::characterAttribute());
    }

    public function testCheatCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::cheatCode());
    }

    public function testCitationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::citation());
    }

    public function testCommentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::comment());
    }

    public function testCommentCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::commentCount());
    }

    public function testContentLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::contentLocation());
    }

    public function testContentRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::contentRating());
    }

    public function testContributorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::contributor());
    }

    public function testCopyrightHolderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::copyrightHolder());
    }

    public function testCopyrightYearWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::copyrightYear());
    }

    public function testCountriesNotSupportedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::countriesNotSupported());
    }

    public function testCountriesSupportedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::countriesSupported());
    }

    public function testCreatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::creator());
    }

    public function testDateCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::dateCreated());
    }

    public function testDateModifiedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::dateModified());
    }

    public function testDatePublishedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::datePublished());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::description());
    }

    public function testDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::device());
    }

    public function testDirectorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::director());
    }

    public function testDirectorsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::directors());
    }

    public function testDiscussionUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::discussionUrl());
    }

    public function testDownloadUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::downloadUrl());
    }

    public function testEditorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::editor());
    }

    public function testEducationalAlignmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::educationalAlignment());
    }

    public function testEducationalUseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::educationalUse());
    }

    public function testEncodingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::encoding());
    }

    public function testEncodingsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::encodings());
    }

    public function testExampleOfWorkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::exampleOfWork());
    }

    public function testFeatureListWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::featureList());
    }

    public function testFileFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::fileFormat());
    }

    public function testFileSizeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::fileSize());
    }

    public function testGameItemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::gameItem());
    }

    public function testGameLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::gameLocation());
    }

    public function testGamePlatformWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::gamePlatform());
    }

    public function testGameServerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::gameServer());
    }

    public function testGameTipWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::gameTip());
    }

    public function testGenreWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::genre());
    }

    public function testHasPartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::hasPart());
    }

    public function testHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::headline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::image());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::inLanguage());
    }

    public function testInstallUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::installUrl());
    }

    public function testInteractionStatisticWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::interactionStatistic());
    }

    public function testInteractivityTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::interactivityType());
    }

    public function testIsBasedOnUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::isBasedOnUrl());
    }

    public function testIsFamilyFriendlyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::isFamilyFriendly());
    }

    public function testIsPartOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::isPartOf());
    }

    public function testKeywordsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::keywords());
    }

    public function testLearningResourceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::learningResourceType());
    }

    public function testLicenseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::license());
    }

    public function testLocationCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::locationCreated());
    }

    public function testMainEntityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::mainEntity());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::mainEntityOfPage());
    }

    public function testMemoryRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::memoryRequirements());
    }

    public function testMentionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::mentions());
    }

    public function testMusicByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::musicBy());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::name());
    }

    public function testNumberOfPlayersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::numberOfPlayers());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::offers());
    }

    public function testOperatingSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::operatingSystem());
    }

    public function testPermissionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::permissions());
    }

    public function testPlayModeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::playMode());
    }

    public function testPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::position());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::potentialAction());
    }

    public function testProcessorRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::processorRequirements());
    }

    public function testProducerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::producer());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::provider());
    }

    public function testPublicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::publication());
    }

    public function testPublisherWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::publisher());
    }

    public function testPublishingPrinciplesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::publishingPrinciples());
    }

    public function testQuestWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::quest());
    }

    public function testRecordedAtWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::recordedAt());
    }

    public function testReleaseNotesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::releaseNotes());
    }

    public function testRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::requirements());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::reviews());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::sameAs());
    }

    public function testSchemaVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::schemaVersion());
    }

    public function testScreenshotWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::screenshot());
    }

    public function testSoftwareAddOnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::softwareAddOn());
    }

    public function testSoftwareHelpWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::softwareHelp());
    }

    public function testSoftwareRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::softwareRequirements());
    }

    public function testSoftwareVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::softwareVersion());
    }

    public function testSourceOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::sourceOrganization());
    }

    public function testStorageRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::storageRequirements());
    }

    public function testSupportingDataWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::supportingData());
    }

    public function testTextWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::text());
    }

    public function testThumbnailUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::thumbnailUrl());
    }

    public function testTimeRequiredWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::timeRequired());
    }

    public function testTrailerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::trailer());
    }

    public function testTranslatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::translator());
    }

    public function testTypicalAgeRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::typicalAgeRange());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::url());
    }

    public function testVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::version());
    }

    public function testVideoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::video());
    }

    public function testWorkExampleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGame::workExample());
    }
}