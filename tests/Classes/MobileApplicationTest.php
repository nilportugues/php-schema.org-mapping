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
 * Classes MobileApplicationTest.
 */
class MobileApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MobileApplication::schemaUrl(), 'http://schema.org/MobileApplication');
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

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::aggregateRating());
    }

    public function testAlternativeHeadlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::alternativeHeadline());
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

    public function testDiscussionUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::discussionUrl());
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

    public function testFileFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::fileFormat());
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

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::inLanguage());
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

    public function testMentionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::mentions());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::offers());
    }

    public function testPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::position());
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

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::reviews());
    }

    public function testSchemaVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::schemaVersion());
    }

    public function testSourceOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MobileApplication::sourceOrganization());
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
