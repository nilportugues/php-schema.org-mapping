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

use NilPortugues\SchemaOrg\Classes\TaxiReservation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TaxiReservationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class TaxiReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(TaxiReservation::schemaUrl(), "http://schema.org/TaxiReservation");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::alternateName());
    }

    public function testBookingAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::bookingAgent());
    }

    public function testBookingTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::bookingTime());
    }

    public function testBrokerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::broker());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::mainEntityOfPage());
    }

    public function testModifiedTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::modifiedTime());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::name());
    }

    public function testPartySizeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::partySize());
    }

    public function testPickupLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::pickupLocation());
    }

    public function testPickupTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::pickupTime());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::potentialAction());
    }

    public function testPriceCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::priceCurrency());
    }

    public function testProgramMembershipUsedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::programMembershipUsed());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::provider());
    }

    public function testReservationForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::reservationFor());
    }

    public function testReservationIdWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::reservationId());
    }

    public function testReservationStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::reservationStatus());
    }

    public function testReservedTicketWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::reservedTicket());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::sameAs());
    }

    public function testTotalPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::totalPrice());
    }

    public function testUnderNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::underName());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiReservation::url());
    }
}