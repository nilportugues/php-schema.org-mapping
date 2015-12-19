<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Review;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ReviewTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ReviewTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Review::schemaUrl(), "http://schema.org/Review");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Review::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Review::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Review::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Review::image());
    }

    public function testItemReviewedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Review::itemReviewed());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Review::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Review::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Review::potentialAction());
    }

    public function testReviewBodyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Review::reviewBody());
    }

    public function testReviewRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Review::reviewRating());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Review::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Review::url());
    }
}