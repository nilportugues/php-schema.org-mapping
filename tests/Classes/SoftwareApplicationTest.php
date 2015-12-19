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

use NilPortugues\SchemaOrg\Classes\SoftwareApplication;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes SoftwareApplicationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class SoftwareApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(SoftwareApplication::schemaUrl(), "http://schema.org/SoftwareApplication");
    }

    public function testAboutWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::about());
    }

    public function testAccessibilityAPIWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::accessibilityAPI());
    }

    public function testAccessibilityControlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::accessibilityControl());
    }

    public function testAccessibilityFeatureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::accessibilityFeature());
    }

    public function testAccessibilityHazardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::accessibilityHazard());
    }

    public function testAccountablePersonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::accountablePerson());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::additionalType());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::alternateName());
    }

    public function testAlternativeHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::alternativeHeadline());
    }

    public function testApplicationCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::applicationCategory());
    }

    public function testApplicationSubCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::applicationSubCategory());
    }

    public function testApplicationSuiteWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::applicationSuite());
    }

    public function testAssociatedMediaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::associatedMedia());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::audience());
    }

    public function testAudioWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::audio());
    }

    public function testAuthorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::author());
    }

    public function testAvailableOnDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::availableOnDevice());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::awards());
    }

    public function testCharacterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::character());
    }

    public function testCitationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::citation());
    }

    public function testCommentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::comment());
    }

    public function testCommentCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::commentCount());
    }

    public function testContentLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::contentLocation());
    }

    public function testContentRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::contentRating());
    }

    public function testContributorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::contributor());
    }

    public function testCopyrightHolderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::copyrightHolder());
    }

    public function testCopyrightYearWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::copyrightYear());
    }

    public function testCountriesNotSupportedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::countriesNotSupported());
    }

    public function testCountriesSupportedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::countriesSupported());
    }

    public function testCreatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::creator());
    }

    public function testDateCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::dateCreated());
    }

    public function testDateModifiedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::dateModified());
    }

    public function testDatePublishedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::datePublished());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::description());
    }

    public function testDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::device());
    }

    public function testDiscussionUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::discussionUrl());
    }

    public function testDownloadUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::downloadUrl());
    }

    public function testEditorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::editor());
    }

    public function testEducationalAlignmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::educationalAlignment());
    }

    public function testEducationalUseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::educationalUse());
    }

    public function testEncodingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::encoding());
    }

    public function testEncodingsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::encodings());
    }

    public function testExampleOfWorkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::exampleOfWork());
    }

    public function testFeatureListWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::featureList());
    }

    public function testFileFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::fileFormat());
    }

    public function testFileSizeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::fileSize());
    }

    public function testGenreWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::genre());
    }

    public function testHasPartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::hasPart());
    }

    public function testHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::headline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::image());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::inLanguage());
    }

    public function testInstallUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::installUrl());
    }

    public function testInteractionStatisticWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::interactionStatistic());
    }

    public function testInteractivityTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::interactivityType());
    }

    public function testIsBasedOnUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::isBasedOnUrl());
    }

    public function testIsFamilyFriendlyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::isFamilyFriendly());
    }

    public function testIsPartOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::isPartOf());
    }

    public function testKeywordsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::keywords());
    }

    public function testLearningResourceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::learningResourceType());
    }

    public function testLicenseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::license());
    }

    public function testLocationCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::locationCreated());
    }

    public function testMainEntityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::mainEntity());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::mainEntityOfPage());
    }

    public function testMemoryRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::memoryRequirements());
    }

    public function testMentionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::mentions());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::name());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::offers());
    }

    public function testOperatingSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::operatingSystem());
    }

    public function testPermissionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::permissions());
    }

    public function testPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::position());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::potentialAction());
    }

    public function testProcessorRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::processorRequirements());
    }

    public function testProducerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::producer());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::provider());
    }

    public function testPublicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::publication());
    }

    public function testPublisherWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::publisher());
    }

    public function testPublishingPrinciplesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::publishingPrinciples());
    }

    public function testRecordedAtWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::recordedAt());
    }

    public function testReleaseNotesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::releaseNotes());
    }

    public function testRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::requirements());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::reviews());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::sameAs());
    }

    public function testSchemaVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::schemaVersion());
    }

    public function testScreenshotWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::screenshot());
    }

    public function testSoftwareAddOnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::softwareAddOn());
    }

    public function testSoftwareHelpWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::softwareHelp());
    }

    public function testSoftwareRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::softwareRequirements());
    }

    public function testSoftwareVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::softwareVersion());
    }

    public function testSourceOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::sourceOrganization());
    }

    public function testStorageRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::storageRequirements());
    }

    public function testSupportingDataWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::supportingData());
    }

    public function testTextWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::text());
    }

    public function testThumbnailUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::thumbnailUrl());
    }

    public function testTimeRequiredWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::timeRequired());
    }

    public function testTranslatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::translator());
    }

    public function testTypicalAgeRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::typicalAgeRange());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::url());
    }

    public function testVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::version());
    }

    public function testVideoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::video());
    }

    public function testWorkExampleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::workExample());
    }
}