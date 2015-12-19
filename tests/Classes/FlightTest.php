<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Flight;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes FlightTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class FlightTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Flight::schemaUrl(), "http://schema.org/Flight");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::additionalType());
    }

    public function testAircraftWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::aircraft());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::alternateName());
    }

    public function testArrivalAirportWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::arrivalAirport());
    }

    public function testArrivalGateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::arrivalGate());
    }

    public function testArrivalTerminalWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::arrivalTerminal());
    }

    public function testArrivalTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::arrivalTime());
    }

    public function testBoardingPolicyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::boardingPolicy());
    }

    public function testCarrierWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::carrier());
    }

    public function testDepartureAirportWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::departureAirport());
    }

    public function testDepartureGateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::departureGate());
    }

    public function testDepartureTerminalWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::departureTerminal());
    }

    public function testDepartureTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::departureTime());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::description());
    }

    public function testEstimatedFlightDurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::estimatedFlightDuration());
    }

    public function testFlightDistanceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::flightDistance());
    }

    public function testFlightNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::flightNumber());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::mainEntityOfPage());
    }

    public function testMealServiceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::mealService());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::potentialAction());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::provider());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::sameAs());
    }

    public function testSellerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::seller());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::url());
    }

    public function testWebCheckinTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Flight::webCheckinTime());
    }
}