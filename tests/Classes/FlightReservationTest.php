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
 * Classes FlightReservationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class FlightReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(FlightReservation::schemaUrl(), "http://schema.org/FlightReservation");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::alternateName());
    }

    public function testBoardingGroupWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::boardingGroup());
    }

    public function testBookingAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::bookingAgent());
    }

    public function testBookingTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::bookingTime());
    }

    public function testBrokerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::broker());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::mainEntityOfPage());
    }

    public function testModifiedTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::modifiedTime());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::name());
    }

    public function testPassengerPriorityStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::passengerPriorityStatus());
    }

    public function testPassengerSequenceNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::passengerSequenceNumber());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::potentialAction());
    }

    public function testPriceCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::priceCurrency());
    }

    public function testProgramMembershipUsedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::programMembershipUsed());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::provider());
    }

    public function testReservationForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::reservationFor());
    }

    public function testReservationIdWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::reservationId());
    }

    public function testReservationStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::reservationStatus());
    }

    public function testReservedTicketWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::reservedTicket());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::sameAs());
    }

    public function testSecurityScreeningWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::securityScreening());
    }

    public function testTotalPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::totalPrice());
    }

    public function testUnderNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::underName());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FlightReservation::url());
    }
}