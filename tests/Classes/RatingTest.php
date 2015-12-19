<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Rating;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes RatingTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class RatingTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Rating::schemaUrl(), "http://schema.org/Rating");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Rating::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Rating::alternateName());
    }

    public function testBestRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Rating::bestRating());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Rating::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Rating::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Rating::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Rating::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Rating::potentialAction());
    }

    public function testRatingValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Rating::ratingValue());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Rating::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Rating::url());
    }

    public function testWorstRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Rating::worstRating());
    }
}