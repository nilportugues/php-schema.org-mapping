<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\TrainReservation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TrainReservationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class TrainReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(TrainReservation::schemaUrl(), "http://schema.org/TrainReservation");
    }


}