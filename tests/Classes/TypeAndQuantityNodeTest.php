<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\TypeAndQuantityNode;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TypeAndQuantityNodeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class TypeAndQuantityNodeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(TypeAndQuantityNode::schemaUrl(), "http://schema.org/TypeAndQuantityNode");
    }

    public function testAmountOfThisGoodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TypeAndQuantityNode::amountOfThisGood());
    }

    public function testBusinessFunctionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TypeAndQuantityNode::businessFunction());
    }

    public function testTypeOfGoodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TypeAndQuantityNode::typeOfGood());
    }

    public function testUnitCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TypeAndQuantityNode::unitCode());
    }

    public function testUnitTextWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TypeAndQuantityNode::unitText());
    }
}