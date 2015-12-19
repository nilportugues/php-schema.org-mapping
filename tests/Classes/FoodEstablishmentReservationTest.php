<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\FoodEstablishmentReservation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes FoodEstablishmentReservationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class FoodEstablishmentReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(FoodEstablishmentReservation::schemaUrl(), "http://schema.org/FoodEstablishmentReservation");
    }

    public function testEndTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FoodEstablishmentReservation::endTime());
    }

    public function testPartySizeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FoodEstablishmentReservation::partySize());
    }

    public function testStartTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FoodEstablishmentReservation::startTime());
    }
}