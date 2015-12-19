<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\ImageGallery;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ImageGalleryTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ImageGalleryTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ImageGallery::schemaUrl(), "http://schema.org/ImageGallery");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::alternateName());
    }

    public function testBreadcrumbWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::breadcrumb());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::image());
    }

    public function testLastReviewedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::lastReviewed());
    }

    public function testMainContentOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::mainContentOfPage());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::potentialAction());
    }

    public function testPrimaryImageOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::primaryImageOfPage());
    }

    public function testRelatedLinkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::relatedLink());
    }

    public function testReviewedByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::reviewedBy());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::sameAs());
    }

    public function testSignificantLinkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::significantLink());
    }

    public function testSignificantLinksWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::significantLinks());
    }

    public function testSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::specialty());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImageGallery::url());
    }
}