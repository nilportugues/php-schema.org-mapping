<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\EventReservation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes EventReservationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class EventReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(EventReservation::schemaUrl(), "http://schema.org/EventReservation");
    }


}