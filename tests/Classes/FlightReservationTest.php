<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\FlightReservation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes FlightReservationTest.
 */
class FlightReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(FlightReservation::schemaUrl(), 'http://schema.org/FlightReservation');
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
