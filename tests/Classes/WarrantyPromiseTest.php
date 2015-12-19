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

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::description());
    }

    public function testDurationOfWarrantyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::durationOfWarranty());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::url());
    }

    public function testWarrantyScopeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::warrantyScope());
    }
}