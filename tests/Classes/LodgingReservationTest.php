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

use NilPortugues\SchemaOrg\Classes\LodgingReservation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes LodgingReservationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class LodgingReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(LodgingReservation::schemaUrl(), "http://schema.org/LodgingReservation");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::alternateName());
    }

    public function testBookingAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::bookingAgent());
    }

    public function testBookingTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::bookingTime());
    }

    public function testBrokerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::broker());
    }

    public function testCheckinTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::checkinTime());
    }

    public function testCheckoutTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::checkoutTime());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::image());
    }

    public function testLodgingUnitDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::lodgingUnitDescription());
    }

    public function testLodgingUnitTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::lodgingUnitType());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::mainEntityOfPage());
    }

    public function testModifiedTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::modifiedTime());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::name());
    }

    public function testNumAdultsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::numAdults());
    }

    public function testNumChildrenWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::numChildren());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::potentialAction());
    }

    public function testPriceCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::priceCurrency());
    }

    public function testProgramMembershipUsedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::programMembershipUsed());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::provider());
    }

    public function testReservationForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::reservationFor());
    }

    public function testReservationIdWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::reservationId());
    }

    public function testReservationStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::reservationStatus());
    }

    public function testReservedTicketWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::reservedTicket());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::sameAs());
    }

    public function testTotalPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::totalPrice());
    }

    public function testUnderNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::underName());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::url());
    }
}