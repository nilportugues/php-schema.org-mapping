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

use NilPortugues\SchemaOrg\Classes\ItemPage;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ItemPageTest.
 */
class ItemPageTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ItemPage::schemaUrl(), 'http://schema.org/ItemPage');
    }

    public function testAboutWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::about());
    }

    public function testAccessibilityAPIWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::accessibilityAPI());
    }

    public function testAccessibilityControlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::accessibilityControl());
    }

    public function testAccessibilityFeatureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::accessibilityFeature());
    }

    public function testAccessibilityHazardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::accessibilityHazard());
    }

    public function testAccountablePersonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::accountablePerson());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::aggregateRating());
    }

    public function testAlternativeHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::alternativeHeadline());
    }

    public function testAssociatedMediaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::associatedMedia());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::audience());
    }

    public function testAudioWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::audio());
    }

    public function testAuthorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::author());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::awards());
    }

    public function testCharacterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::character());
    }

    public function testCitationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::citation());
    }

    public function testCommentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::comment());
    }

    public function testCommentCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::commentCount());
    }

    public function testContentLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::contentLocation());
    }

    public function testContentRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::contentRating());
    }

    public function testContributorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::contributor());
    }

    public function testCopyrightHolderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::copyrightHolder());
    }

    public function testCopyrightYearWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::copyrightYear());
    }

    public function testCreatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::creator());
    }

    public function testDateCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::dateCreated());
    }

    public function testDateModifiedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::dateModified());
    }

    public function testDatePublishedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::datePublished());
    }

    public function testDiscussionUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::discussionUrl());
    }

    public function testEditorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::editor());
    }

    public function testEducationalAlignmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::educationalAlignment());
    }

    public function testEducationalUseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::educationalUse());
    }

    public function testEncodingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::encoding());
    }

    public function testEncodingsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::encodings());
    }

    public function testExampleOfWorkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::exampleOfWork());
    }

    public function testFileFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::fileFormat());
    }

    public function testGenreWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::genre());
    }

    public function testHasPartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::hasPart());
    }

    public function testHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::headline());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::inLanguage());
    }

    public function testInteractionStatisticWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::interactionStatistic());
    }

    public function testInteractivityTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::interactivityType());
    }

    public function testIsBasedOnUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::isBasedOnUrl());
    }

    public function testIsFamilyFriendlyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::isFamilyFriendly());
    }

    public function testIsPartOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::isPartOf());
    }

    public function testKeywordsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::keywords());
    }

    public function testLearningResourceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::learningResourceType());
    }

    public function testLicenseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::license());
    }

    public function testLocationCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::locationCreated());
    }

    public function testMainEntityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::mainEntity());
    }

    public function testMentionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::mentions());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::offers());
    }

    public function testPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::position());
    }

    public function testProducerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::producer());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::provider());
    }

    public function testPublicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::publication());
    }

    public function testPublisherWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::publisher());
    }

    public function testPublishingPrinciplesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::publishingPrinciples());
    }

    public function testRecordedAtWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::recordedAt());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::reviews());
    }

    public function testSchemaVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::schemaVersion());
    }

    public function testSourceOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::sourceOrganization());
    }

    public function testTextWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::text());
    }

    public function testThumbnailUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::thumbnailUrl());
    }

    public function testTimeRequiredWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::timeRequired());
    }

    public function testTranslatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::translator());
    }

    public function testTypicalAgeRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::typicalAgeRange());
    }

    public function testVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::version());
    }

    public function testVideoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::video());
    }

    public function testWorkExampleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemPage::workExample());
    }
}
