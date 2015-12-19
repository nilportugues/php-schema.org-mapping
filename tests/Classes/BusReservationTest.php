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

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::alternateName());
    }

    public function testBookingAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::bookingAgent());
    }

    public function testBookingTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::bookingTime());
    }

    public function testBrokerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::broker());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::mainEntityOfPage());
    }

    public function testModifiedTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::modifiedTime());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::potentialAction());
    }

    public function testPriceCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::priceCurrency());
    }

    public function testProgramMembershipUsedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::programMembershipUsed());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::provider());
    }

    public function testReservationForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::reservationFor());
    }

    public function testReservationIdWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::reservationId());
    }

    public function testReservationStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::reservationStatus());
    }

    public function testReservedTicketWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::reservedTicket());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::sameAs());
    }

    public function testTotalPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::totalPrice());
    }

    public function testUnderNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::underName());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusReservation::url());
    }
}