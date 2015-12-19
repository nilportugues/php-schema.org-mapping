<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\WebPage;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes WebPageTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class WebPageTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(WebPage::schemaUrl(), "http://schema.org/WebPage");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::alternateName());
    }

    public function testBreadcrumbWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::breadcrumb());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::image());
    }

    public function testLastReviewedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::lastReviewed());
    }

    public function testMainContentOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::mainContentOfPage());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::potentialAction());
    }

    public function testPrimaryImageOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::primaryImageOfPage());
    }

    public function testRelatedLinkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::relatedLink());
    }

    public function testReviewedByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::reviewedBy());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::sameAs());
    }

    public function testSignificantLinkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::significantLink());
    }

    public function testSignificantLinksWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::significantLinks());
    }

    public function testSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::specialty());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WebPage::url());
    }
}