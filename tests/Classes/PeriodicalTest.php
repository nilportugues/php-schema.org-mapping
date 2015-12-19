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

use NilPortugues\SchemaOrg\Classes\Periodical;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PeriodicalTest.
 */
class PeriodicalTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Periodical::schemaUrl(), 'http://schema.org/Periodical');
    }

    public function testAboutWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::about());
    }

    public function testAccessibilityAPIWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::accessibilityAPI());
    }

    public function testAccessibilityControlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::accessibilityControl());
    }

    public function testAccessibilityFeatureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::accessibilityFeature());
    }

    public function testAccessibilityHazardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::accessibilityHazard());
    }

    public function testAccountablePersonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::accountablePerson());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::aggregateRating());
    }

    public function testAlternativeHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::alternativeHeadline());
    }

    public function testAssociatedMediaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::associatedMedia());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::audience());
    }

    public function testAudioWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::audio());
    }

    public function testAuthorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::author());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::awards());
    }

    public function testCharacterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::character());
    }

    public function testCitationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::citation());
    }

    public function testCommentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::comment());
    }

    public function testCommentCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::commentCount());
    }

    public function testContentLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::contentLocation());
    }

    public function testContentRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::contentRating());
    }

    public function testContributorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::contributor());
    }

    public function testCopyrightHolderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::copyrightHolder());
    }

    public function testCopyrightYearWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::copyrightYear());
    }

    public function testCreatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::creator());
    }

    public function testDateCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::dateCreated());
    }

    public function testDateModifiedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::dateModified());
    }

    public function testDatePublishedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::datePublished());
    }

    public function testDiscussionUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::discussionUrl());
    }

    public function testEditorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::editor());
    }

    public function testEducationalAlignmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::educationalAlignment());
    }

    public function testEducationalUseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::educationalUse());
    }

    public function testEncodingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::encoding());
    }

    public function testEncodingsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::encodings());
    }

    public function testExampleOfWorkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::exampleOfWork());
    }

    public function testFileFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::fileFormat());
    }

    public function testGenreWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::genre());
    }

    public function testHasPartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::hasPart());
    }

    public function testHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::headline());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::inLanguage());
    }

    public function testInteractionStatisticWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::interactionStatistic());
    }

    public function testInteractivityTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::interactivityType());
    }

    public function testIsBasedOnUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::isBasedOnUrl());
    }

    public function testIsFamilyFriendlyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::isFamilyFriendly());
    }

    public function testIsPartOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::isPartOf());
    }

    public function testIssnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::issn());
    }

    public function testKeywordsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::keywords());
    }

    public function testLearningResourceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::learningResourceType());
    }

    public function testLicenseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::license());
    }

    public function testLocationCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::locationCreated());
    }

    public function testMainEntityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::mainEntity());
    }

    public function testMentionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::mentions());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::offers());
    }

    public function testPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::position());
    }

    public function testProducerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::producer());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::provider());
    }

    public function testPublicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::publication());
    }

    public function testPublisherWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::publisher());
    }

    public function testPublishingPrinciplesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::publishingPrinciples());
    }

    public function testRecordedAtWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::recordedAt());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::reviews());
    }

    public function testSchemaVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::schemaVersion());
    }

    public function testSourceOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::sourceOrganization());
    }

    public function testTextWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::text());
    }

    public function testThumbnailUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::thumbnailUrl());
    }

    public function testTimeRequiredWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::timeRequired());
    }

    public function testTranslatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::translator());
    }

    public function testTypicalAgeRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::typicalAgeRange());
    }

    public function testVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::version());
    }

    public function testVideoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::video());
    }

    public function testWorkExampleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Periodical::workExample());
    }
}
