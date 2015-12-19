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

use NilPortugues\SchemaOrg\Classes\DataDownload;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DataDownloadTest.
 */
class DataDownloadTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DataDownload::schemaUrl(), 'http://schema.org/DataDownload');
    }

    public function testAboutWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::about());
    }

    public function testAccessibilityAPIWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::accessibilityAPI());
    }

    public function testAccessibilityControlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::accessibilityControl());
    }

    public function testAccessibilityFeatureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::accessibilityFeature());
    }

    public function testAccessibilityHazardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::accessibilityHazard());
    }

    public function testAccountablePersonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::accountablePerson());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::aggregateRating());
    }

    public function testAlternativeHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::alternativeHeadline());
    }

    public function testAssociatedMediaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::associatedMedia());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::audience());
    }

    public function testAudioWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::audio());
    }

    public function testAuthorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::author());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::awards());
    }

    public function testCharacterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::character());
    }

    public function testCitationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::citation());
    }

    public function testCommentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::comment());
    }

    public function testCommentCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::commentCount());
    }

    public function testContentLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::contentLocation());
    }

    public function testContentRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::contentRating());
    }

    public function testContributorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::contributor());
    }

    public function testCopyrightHolderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::copyrightHolder());
    }

    public function testCopyrightYearWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::copyrightYear());
    }

    public function testCreatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::creator());
    }

    public function testDateCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::dateCreated());
    }

    public function testDateModifiedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::dateModified());
    }

    public function testDatePublishedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::datePublished());
    }

    public function testDiscussionUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::discussionUrl());
    }

    public function testEditorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::editor());
    }

    public function testEducationalAlignmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::educationalAlignment());
    }

    public function testEducationalUseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::educationalUse());
    }

    public function testEncodingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::encoding());
    }

    public function testEncodingsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::encodings());
    }

    public function testExampleOfWorkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::exampleOfWork());
    }

    public function testFileFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::fileFormat());
    }

    public function testGenreWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::genre());
    }

    public function testHasPartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::hasPart());
    }

    public function testHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::headline());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::inLanguage());
    }

    public function testInteractionStatisticWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::interactionStatistic());
    }

    public function testInteractivityTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::interactivityType());
    }

    public function testIsBasedOnUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::isBasedOnUrl());
    }

    public function testIsFamilyFriendlyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::isFamilyFriendly());
    }

    public function testIsPartOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::isPartOf());
    }

    public function testKeywordsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::keywords());
    }

    public function testLearningResourceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::learningResourceType());
    }

    public function testLicenseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::license());
    }

    public function testLocationCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::locationCreated());
    }

    public function testMainEntityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::mainEntity());
    }

    public function testMentionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::mentions());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::offers());
    }

    public function testPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::position());
    }

    public function testProducerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::producer());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::provider());
    }

    public function testPublicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::publication());
    }

    public function testPublisherWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::publisher());
    }

    public function testPublishingPrinciplesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::publishingPrinciples());
    }

    public function testRecordedAtWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::recordedAt());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::reviews());
    }

    public function testSchemaVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::schemaVersion());
    }

    public function testSourceOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::sourceOrganization());
    }

    public function testTextWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::text());
    }

    public function testThumbnailUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::thumbnailUrl());
    }

    public function testTimeRequiredWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::timeRequired());
    }

    public function testTranslatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::translator());
    }

    public function testTypicalAgeRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::typicalAgeRange());
    }

    public function testVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::version());
    }

    public function testVideoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::video());
    }

    public function testWorkExampleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataDownload::workExample());
    }
}
