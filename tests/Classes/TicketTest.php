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

use NilPortugues\SchemaOrg\Classes\Ticket;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TicketTest.
 */
class TicketTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Ticket::schemaUrl(), 'http://schema.org/Ticket');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::alternateName());
    }

    public function testDateIssuedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::dateIssued());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::image());
    }

    public function testIssuedByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::issuedBy());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::potentialAction());
    }

    public function testPriceCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::priceCurrency());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::sameAs());
    }

    public function testTicketNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::ticketNumber());
    }

    public function testTicketTokenWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::ticketToken());
    }

    public function testTicketedSeatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::ticketedSeat());
    }

    public function testTotalPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::totalPrice());
    }

    public function testUnderNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::underName());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Ticket::url());
    }
}
