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

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::alternateName());
    }

    public function testBookingAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::bookingAgent());
    }

    public function testBookingTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::bookingTime());
    }

    public function testBrokerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::broker());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::mainEntityOfPage());
    }

    public function testModifiedTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::modifiedTime());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::potentialAction());
    }

    public function testPriceCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::priceCurrency());
    }

    public function testProgramMembershipUsedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::programMembershipUsed());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::provider());
    }

    public function testReservationForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::reservationFor());
    }

    public function testReservationIdWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::reservationId());
    }

    public function testReservationStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::reservationStatus());
    }

    public function testReservedTicketWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::reservedTicket());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::sameAs());
    }

    public function testTotalPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::totalPrice());
    }

    public function testUnderNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::underName());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EventReservation::url());
    }
}