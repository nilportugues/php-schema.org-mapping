<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\RentalCarReservation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes RentalCarReservationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class RentalCarReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(RentalCarReservation::schemaUrl(), "http://schema.org/RentalCarReservation");
    }

    public function testDropoffLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RentalCarReservation::dropoffLocation());
    }

    public function testDropoffTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RentalCarReservation::dropoffTime());
    }

    public function testPickupLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RentalCarReservation::pickupLocation());
    }

    public function testPickupTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RentalCarReservation::pickupTime());
    }
}