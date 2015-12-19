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

use NilPortugues\SchemaOrg\Classes\WebApplication;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes WebApplicationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class WebApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(WebApplication::schemaUrl(), "http://schema.org/WebApplication");
    }

    public function testAboutWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::about());
    }

    public function testAccessibilityAPIWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::accessibilityAPI());
    }

    public function testAccessibilityControlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::accessibilityControl());
    }

    public function testAccessibilityFeatureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::accessibilityFeature());
    }

    public function testAccessibilityHazardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::accessibilityHazard());
    }

    public function testAccountablePersonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::accountablePerson());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::additionalType());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::alternateName());
    }

    public function testAlternativeHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::alternativeHeadline());
    }

    public function testApplicationCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::applicationCategory());
    }

    public function testApplicationSubCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::applicationSubCategory());
    }

    public function testApplicationSuiteWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::applicationSuite());
    }

    public function testAssociatedMediaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::associatedMedia());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::audience());
    }

    public function testAudioWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::audio());
    }

    public function testAuthorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::author());
    }

    public function testAvailableOnDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::availableOnDevice());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::awards());
    }

    public function testBrowserRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::browserRequirements());
    }

    public function testCharacterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::character());
    }

    public function testCitationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::citation());
    }

    public function testCommentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::comment());
    }

    public function testCommentCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::commentCount());
    }

    public function testContentLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::contentLocation());
    }

    public function testContentRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::contentRating());
    }

    public function testContributorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::contributor());
    }

    public function testCopyrightHolderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::copyrightHolder());
    }

    public function testCopyrightYearWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::copyrightYear());
    }

    public function testCountriesNotSupportedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::countriesNotSupported());
    }

    public function testCountriesSupportedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::countriesSupported());
    }

    public function testCreatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::creator());
    }

    public function testDateCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::dateCreated());
    }

    public function testDateModifiedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::dateModified());
    }

    public function testDatePublishedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::datePublished());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::description());
    }

    public function testDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::device());
    }

    public function testDiscussionUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::discussionUrl());
    }

    public function testDownloadUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::downloadUrl());
    }

    public function testEditorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::editor());
    }

    public function testEducationalAlignmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::educationalAlignment());
    }

    public function testEducationalUseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::educationalUse());
    }

    public function testEncodingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::encoding());
    }

    public function testEncodingsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::encodings());
    }

    public function testExampleOfWorkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::exampleOfWork());
    }

    public function testFeatureListWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::featureList());
    }

    public function testFileFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::fileFormat());
    }

    public function testFileSizeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::fileSize());
    }

    public function testGenreWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::genre());
    }

    public function testHasPartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::hasPart());
    }

    public function testHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::headline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::image());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::inLanguage());
    }

    public function testInstallUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::installUrl());
    }

    public function testInteractionStatisticWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::interactionStatistic());
    }

    public function testInteractivityTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::interactivityType());
    }

    public function testIsBasedOnUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::isBasedOnUrl());
    }

    public function testIsFamilyFriendlyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::isFamilyFriendly());
    }

    public function testIsPartOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::isPartOf());
    }

    public function testKeywordsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::keywords());
    }

    public function testLearningResourceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::learningResourceType());
    }

    public function testLicenseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::license());
    }

    public function testLocationCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::locationCreated());
    }

    public function testMainEntityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::mainEntity());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::mainEntityOfPage());
    }

    public function testMemoryRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::memoryRequirements());
    }

    public function testMentionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::mentions());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::name());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::offers());
    }

    public function testOperatingSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::operatingSystem());
    }

    public function testPermissionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::permissions());
    }

    public function testPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::position());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::potentialAction());
    }

    public function testProcessorRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::processorRequirements());
    }

    public function testProducerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::producer());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::provider());
    }

    public function testPublicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::publication());
    }

    public function testPublisherWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::publisher());
    }

    public function testPublishingPrinciplesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::publishingPrinciples());
    }

    public function testRecordedAtWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::recordedAt());
    }

    public function testReleaseNotesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::releaseNotes());
    }

    public function testRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::requirements());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::reviews());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::sameAs());
    }

    public function testSchemaVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::schemaVersion());
    }

    public function testScreenshotWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::screenshot());
    }

    public function testSoftwareAddOnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::softwareAddOn());
    }

    public function testSoftwareHelpWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::softwareHelp());
    }

    public function testSoftwareRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::softwareRequirements());
    }

    public function testSoftwareVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::softwareVersion());
    }

    public function testSourceOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::sourceOrganization());
    }

    public function testStorageRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::storageRequirements());
    }

    public function testSupportingDataWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::supportingData());
    }

    public function testTextWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::text());
    }

    public function testThumbnailUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::thumbnailUrl());
    }

    public function testTimeRequiredWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::timeRequired());
    }

    public function testTranslatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::translator());
    }

    public function testTypicalAgeRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::typicalAgeRange());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::url());
    }

    public function testVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::version());
    }

    public function testVideoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::video());
    }

    public function testWorkExampleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebApplication::workExample());
    }
}