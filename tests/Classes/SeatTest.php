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

use NilPortugues\SchemaOrg\Classes\Seat;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes SeatTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class SeatTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Seat::schemaUrl(), "http://schema.org/Seat");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Seat::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Seat::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Seat::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Seat::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Seat::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Seat::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Seat::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Seat::sameAs());
    }

    public function testSeatNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Seat::seatNumber());
    }

    public function testSeatRowWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Seat::seatRow());
    }

    public function testSeatSectionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Seat::seatSection());
    }

    public function testSeatingTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Seat::seatingType());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Seat::url());
    }
}