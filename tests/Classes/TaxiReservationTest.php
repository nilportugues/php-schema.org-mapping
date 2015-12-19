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
 * Classes TaxiReservationTest.
 */
class TaxiReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(TaxiReservation::schemaUrl(), 'http://schema.org/TaxiReservation');
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
}
