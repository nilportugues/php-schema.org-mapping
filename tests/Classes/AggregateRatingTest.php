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
 * Classes AggregateRatingTest.
 */
class AggregateRatingTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(AggregateRating::schemaUrl(), 'http://schema.org/AggregateRating');
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
