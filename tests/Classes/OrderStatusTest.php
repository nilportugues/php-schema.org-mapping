<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\OrderStatus;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OrderStatusTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class OrderStatusTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(OrderStatus::schemaUrl(), "http://schema.org/OrderStatus");
    }


}