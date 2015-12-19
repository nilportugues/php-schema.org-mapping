<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\TrainTrip;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TrainTripTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class TrainTripTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(TrainTrip::schemaUrl(), "http://schema.org/TrainTrip");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::alternateName());
    }

    public function testArrivalPlatformWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::arrivalPlatform());
    }

    public function testArrivalStationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::arrivalStation());
    }

    public function testArrivalTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::arrivalTime());
    }

    public function testDeparturePlatformWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::departurePlatform());
    }

    public function testDepartureStationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::departureStation());
    }

    public function testDepartureTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::departureTime());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::potentialAction());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::provider());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::sameAs());
    }

    public function testTrainNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::trainName());
    }

    public function testTrainNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::trainNumber());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TrainTrip::url());
    }
}