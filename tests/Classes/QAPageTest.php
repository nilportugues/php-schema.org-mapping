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

use NilPortugues\SchemaOrg\Classes\QAPage;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes QAPageTest.
 */
class QAPageTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(QAPage::schemaUrl(), 'http://schema.org/QAPage');
    }

    public function testAboutWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::about());
    }

    public function testAccessibilityAPIWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::accessibilityAPI());
    }

    public function testAccessibilityControlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::accessibilityControl());
    }

    public function testAccessibilityFeatureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::accessibilityFeature());
    }

    public function testAccessibilityHazardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::accessibilityHazard());
    }

    public function testAccountablePersonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::accountablePerson());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::aggregateRating());
    }

    public function testAlternativeHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::alternativeHeadline());
    }

    public function testAssociatedMediaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::associatedMedia());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::audience());
    }

    public function testAudioWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::audio());
    }

    public function testAuthorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::author());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::awards());
    }

    public function testCharacterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::character());
    }

    public function testCitationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::citation());
    }

    public function testCommentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::comment());
    }

    public function testCommentCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::commentCount());
    }

    public function testContentLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::contentLocation());
    }

    public function testContentRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::contentRating());
    }

    public function testContributorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::contributor());
    }

    public function testCopyrightHolderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::copyrightHolder());
    }

    public function testCopyrightYearWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::copyrightYear());
    }

    public function testCreatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::creator());
    }

    public function testDateCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::dateCreated());
    }

    public function testDateModifiedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::dateModified());
    }

    public function testDatePublishedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::datePublished());
    }

    public function testDiscussionUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::discussionUrl());
    }

    public function testEditorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::editor());
    }

    public function testEducationalAlignmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::educationalAlignment());
    }

    public function testEducationalUseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::educationalUse());
    }

    public function testEncodingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::encoding());
    }

    public function testEncodingsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::encodings());
    }

    public function testExampleOfWorkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::exampleOfWork());
    }

    public function testFileFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::fileFormat());
    }

    public function testGenreWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::genre());
    }

    public function testHasPartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::hasPart());
    }

    public function testHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::headline());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::inLanguage());
    }

    public function testInteractionStatisticWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::interactionStatistic());
    }

    public function testInteractivityTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::interactivityType());
    }

    public function testIsBasedOnUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::isBasedOnUrl());
    }

    public function testIsFamilyFriendlyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::isFamilyFriendly());
    }

    public function testIsPartOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::isPartOf());
    }

    public function testKeywordsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::keywords());
    }

    public function testLearningResourceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::learningResourceType());
    }

    public function testLicenseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::license());
    }

    public function testLocationCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::locationCreated());
    }

    public function testMainEntityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::mainEntity());
    }

    public function testMentionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::mentions());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::offers());
    }

    public function testPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::position());
    }

    public function testProducerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::producer());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::provider());
    }

    public function testPublicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::publication());
    }

    public function testPublisherWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::publisher());
    }

    public function testPublishingPrinciplesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::publishingPrinciples());
    }

    public function testRecordedAtWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::recordedAt());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::reviews());
    }

    public function testSchemaVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::schemaVersion());
    }

    public function testSourceOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::sourceOrganization());
    }

    public function testTextWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::text());
    }

    public function testThumbnailUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::thumbnailUrl());
    }

    public function testTimeRequiredWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::timeRequired());
    }

    public function testTranslatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::translator());
    }

    public function testTypicalAgeRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::typicalAgeRange());
    }

    public function testVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::version());
    }

    public function testVideoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::video());
    }

    public function testWorkExampleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QAPage::workExample());
    }
}
