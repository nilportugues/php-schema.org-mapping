<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\BusReservation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BusReservationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BusReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BusReservation::schemaUrl(), "http://schema.org/BusReservation");
    }


}