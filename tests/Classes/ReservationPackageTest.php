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

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::alternateName());
    }

    public function testBookingAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::bookingAgent());
    }

    public function testBookingTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::bookingTime());
    }

    public function testBrokerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::broker());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::mainEntityOfPage());
    }

    public function testModifiedTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::modifiedTime());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::potentialAction());
    }

    public function testPriceCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::priceCurrency());
    }

    public function testProgramMembershipUsedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::programMembershipUsed());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::provider());
    }

    public function testReservationForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::reservationFor());
    }

    public function testReservationIdWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::reservationId());
    }

    public function testReservationStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::reservationStatus());
    }

    public function testReservedTicketWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::reservedTicket());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::sameAs());
    }

    public function testSubReservationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::subReservation());
    }

    public function testTotalPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::totalPrice());
    }

    public function testUnderNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::underName());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::url());
    }
}