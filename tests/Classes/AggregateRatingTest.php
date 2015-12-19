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

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::alternateName());
    }

    public function testBestRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::bestRating());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::image());
    }

    public function testItemReviewedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::itemReviewed());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::potentialAction());
    }

    public function testRatingCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::ratingCount());
    }

    public function testRatingValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::ratingValue());
    }

    public function testReviewCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::reviewCount());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::url());
    }

    public function testWorstRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateRating::worstRating());
    }
}