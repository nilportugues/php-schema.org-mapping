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
 * Classes LodgingReservationTest.
 */
class LodgingReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(LodgingReservation::schemaUrl(), 'http://schema.org/LodgingReservation');
    }

    public function testCheckinTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::checkinTime());
    }

    public function testCheckoutTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::checkoutTime());
    }

    public function testLodgingUnitDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::lodgingUnitDescription());
    }

    public function testLodgingUnitTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::lodgingUnitType());
    }

    public function testNumAdultsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::numAdults());
    }

    public function testNumChildrenWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingReservation::numChildren());
    }
}
