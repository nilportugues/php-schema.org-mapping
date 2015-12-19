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

use NilPortugues\SchemaOrg\Classes\OrderItem;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OrderItemTest.
 */
class OrderItemTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(OrderItem::schemaUrl(), 'http://schema.org/OrderItem');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::name());
    }

    public function testOrderDeliveryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::orderDelivery());
    }

    public function testOrderItemNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::orderItemNumber());
    }

    public function testOrderItemStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::orderItemStatus());
    }

    public function testOrderQuantityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::orderQuantity());
    }

    public function testOrderedItemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::orderedItem());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OrderItem::url());
    }
}
