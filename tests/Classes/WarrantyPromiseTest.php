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

use NilPortugues\SchemaOrg\Classes\WarrantyPromise;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes WarrantyPromiseTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class WarrantyPromiseTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(WarrantyPromise::schemaUrl(), "http://schema.org/WarrantyPromise");
    }

    public function testDurationOfWarrantyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::durationOfWarranty());
    }

    public function testWarrantyScopeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::warrantyScope());
    }
}