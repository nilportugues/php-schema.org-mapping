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

use NilPortugues\SchemaOrg\Classes\FoodEstablishmentReservation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes FoodEstablishmentReservationTest.
 */
class FoodEstablishmentReservationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(FoodEstablishmentReservation::schemaUrl(), 'http://schema.org/FoodEstablishmentReservation');
    }

    public function testEndTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FoodEstablishmentReservation::endTime());
    }

    public function testPartySizeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FoodEstablishmentReservation::partySize());
    }

    public function testStartTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, FoodEstablishmentReservation::startTime());
    }
}
