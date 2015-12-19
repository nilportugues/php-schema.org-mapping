<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\ReservationPackage;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ReservationPackageTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ReservationPackageTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ReservationPackage::schemaUrl(), "http://schema.org/ReservationPackage");
    }

    public function testSubReservationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::subReservation());
    }
}