<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\FlightReservation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes FlightReservationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class FlightReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(FlightReservation::schemaUrl(), "http://schema.org/FlightReservation");
    }

    public function testBoardingGroupWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::boardingGroup());
    }

    public function testPassengerPriorityStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::passengerPriorityStatus());
    }

    public function testPassengerSequenceNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::passengerSequenceNumber());
    }

    public function testSecurityScreeningWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::securityScreening());
    }
}