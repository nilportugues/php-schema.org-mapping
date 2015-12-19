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

use NilPortugues\SchemaOrg\Classes\MobileApplication;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MobileApplicationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MobileApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MobileApplication::schemaUrl(), "http://schema.org/MobileApplication");
    }

    public function testAboutWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::about());
    }

    public function testAccessibilityAPIWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::accessibilityAPI());
    }

    public function testAccessibilityControlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::accessibilityControl());
    }

    public function testAccessibilityFeatureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::accessibilityFeature());
    }

    public function testAccessibilityHazardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::accessibilityHazard());
    }

    public function testAccountablePersonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::accountablePerson());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::additionalType());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::alternateName());
    }

    public function testAlternativeHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::alternativeHeadline());
    }

    public function testApplicationCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::applicationCategory());
    }

    public function testApplicationSubCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::applicationSubCategory());
    }

    public function testApplicationSuiteWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::applicationSuite());
    }

    public function testAssociatedMediaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::associatedMedia());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::audience());
    }

    public function testAudioWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::audio());
    }

    public function testAuthorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::author());
    }

    public function testAvailableOnDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::availableOnDevice());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::awards());
    }

    public function testCarrierRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::carrierRequirements());
    }

    public function testCharacterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::character());
    }

    public function testCitationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::citation());
    }

    public function testCommentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::comment());
    }

    public function testCommentCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::commentCount());
    }

    public function testContentLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::contentLocation());
    }

    public function testContentRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::contentRating());
    }

    public function testContributorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::contributor());
    }

    public function testCopyrightHolderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::copyrightHolder());
    }

    public function testCopyrightYearWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::copyrightYear());
    }

    public function testCountriesNotSupportedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::countriesNotSupported());
    }

    public function testCountriesSupportedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::countriesSupported());
    }

    public function testCreatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::creator());
    }

    public function testDateCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::dateCreated());
    }

    public function testDateModifiedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::dateModified());
    }

    public function testDatePublishedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::datePublished());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::description());
    }

    public function testDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::device());
    }

    public function testDiscussionUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::discussionUrl());
    }

    public function testDownloadUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::downloadUrl());
    }

    public function testEditorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::editor());
    }

    public function testEducationalAlignmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::educationalAlignment());
    }

    public function testEducationalUseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::educationalUse());
    }

    public function testEncodingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::encoding());
    }

    public function testEncodingsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::encodings());
    }

    public function testExampleOfWorkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::exampleOfWork());
    }

    public function testFeatureListWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::featureList());
    }

    public function testFileFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::fileFormat());
    }

    public function testFileSizeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::fileSize());
    }

    public function testGenreWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::genre());
    }

    public function testHasPartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::hasPart());
    }

    public function testHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::headline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::image());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::inLanguage());
    }

    public function testInstallUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::installUrl());
    }

    public function testInteractionStatisticWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::interactionStatistic());
    }

    public function testInteractivityTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::interactivityType());
    }

    public function testIsBasedOnUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::isBasedOnUrl());
    }

    public function testIsFamilyFriendlyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::isFamilyFriendly());
    }

    public function testIsPartOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::isPartOf());
    }

    public function testKeywordsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::keywords());
    }

    public function testLearningResourceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::learningResourceType());
    }

    public function testLicenseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::license());
    }

    public function testLocationCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::locationCreated());
    }

    public function testMainEntityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::mainEntity());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::mainEntityOfPage());
    }

    public function testMemoryRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::memoryRequirements());
    }

    public function testMentionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::mentions());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::name());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::offers());
    }

    public function testOperatingSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::operatingSystem());
    }

    public function testPermissionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::permissions());
    }

    public function testPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::position());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::potentialAction());
    }

    public function testProcessorRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::processorRequirements());
    }

    public function testProducerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::producer());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::provider());
    }

    public function testPublicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::publication());
    }

    public function testPublisherWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::publisher());
    }

    public function testPublishingPrinciplesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::publishingPrinciples());
    }

    public function testRecordedAtWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::recordedAt());
    }

    public function testReleaseNotesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::releaseNotes());
    }

    public function testRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::requirements());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::reviews());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::sameAs());
    }

    public function testSchemaVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::schemaVersion());
    }

    public function testScreenshotWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::screenshot());
    }

    public function testSoftwareAddOnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::softwareAddOn());
    }

    public function testSoftwareHelpWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::softwareHelp());
    }

    public function testSoftwareRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::softwareRequirements());
    }

    public function testSoftwareVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::softwareVersion());
    }

    public function testSourceOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::sourceOrganization());
    }

    public function testStorageRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::storageRequirements());
    }

    public function testSupportingDataWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::supportingData());
    }

    public function testTextWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::text());
    }

    public function testThumbnailUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::thumbnailUrl());
    }

    public function testTimeRequiredWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::timeRequired());
    }

    public function testTranslatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::translator());
    }

    public function testTypicalAgeRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::typicalAgeRange());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::url());
    }

    public function testVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::version());
    }

    public function testVideoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::video());
    }

    public function testWorkExampleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::workExample());
    }
}