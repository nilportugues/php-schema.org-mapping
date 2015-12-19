<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\TaxiReservation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TaxiReservationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class TaxiReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(TaxiReservation::schemaUrl(), "http://schema.org/TaxiReservation");
    }

    public function testPartySizeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::partySize());
    }

    public function testPickupLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::pickupLocation());
    }

    public function testPickupTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::pickupTime());
    }
}