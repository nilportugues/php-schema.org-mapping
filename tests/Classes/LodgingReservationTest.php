<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\LodgingReservation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes LodgingReservationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class LodgingReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(LodgingReservation::schemaUrl(), "http://schema.org/LodgingReservation");
    }

    public function testCheckinTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::checkinTime());
    }

    public function testCheckoutTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::checkoutTime());
    }

    public function testLodgingUnitDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::lodgingUnitDescription());
    }

    public function testLodgingUnitTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::lodgingUnitType());
    }

    public function testNumAdultsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::numAdults());
    }

    public function testNumChildrenWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::numChildren());
    }
}