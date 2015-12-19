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

    public function testSubReservationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReservationPackage::subReservation());
    }
}