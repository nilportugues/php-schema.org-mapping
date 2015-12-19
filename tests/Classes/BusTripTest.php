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

use NilPortugues\SchemaOrg\Classes\BusTrip;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BusTripTest.
 */
class BusTripTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BusTrip::schemaUrl(), 'http://schema.org/BusTrip');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::alternateName());
    }

    public function testArrivalBusStopWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::arrivalBusStop());
    }

    public function testArrivalTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::arrivalTime());
    }

    public function testBusNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::busName());
    }

    public function testBusNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::busNumber());
    }

    public function testDepartureBusStopWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::departureBusStop());
    }

    public function testDepartureTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::departureTime());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::potentialAction());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::provider());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusTrip::url());
    }
}
