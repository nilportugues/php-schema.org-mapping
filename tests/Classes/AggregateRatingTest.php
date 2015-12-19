<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\AggregateRating;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes AggregateRatingTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class AggregateRatingTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(AggregateRating::schemaUrl(), "http://schema.org/AggregateRating");
    }

    public function testItemReviewedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::itemReviewed());
    }

    public function testRatingCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::ratingCount());
    }

    public function testReviewCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::reviewCount());
    }
}