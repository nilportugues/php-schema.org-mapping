<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\VideoGallery;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes VideoGalleryTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class VideoGalleryTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(VideoGallery::schemaUrl(), "http://schema.org/VideoGallery");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::alternateName());
    }

    public function testBreadcrumbWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::breadcrumb());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::image());
    }

    public function testLastReviewedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::lastReviewed());
    }

    public function testMainContentOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::mainContentOfPage());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::potentialAction());
    }

    public function testPrimaryImageOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::primaryImageOfPage());
    }

    public function testRelatedLinkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::relatedLink());
    }

    public function testReviewedByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::reviewedBy());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::sameAs());
    }

    public function testSignificantLinkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::significantLink());
    }

    public function testSignificantLinksWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::significantLinks());
    }

    public function testSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::specialty());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VideoGallery::url());
    }
}