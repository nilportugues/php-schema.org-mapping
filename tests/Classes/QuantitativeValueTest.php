<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\QuantitativeValue;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes QuantitativeValueTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class QuantitativeValueTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(QuantitativeValue::schemaUrl(), "http://schema.org/QuantitativeValue");
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QuantitativeValue::additionalProperty());
    }

    public function testMaxValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QuantitativeValue::maxValue());
    }

    public function testMinValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QuantitativeValue::minValue());
    }

    public function testUnitCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QuantitativeValue::unitCode());
    }

    public function testUnitTextWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QuantitativeValue::unitText());
    }

    public function testValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QuantitativeValue::value());
    }

    public function testValueReferenceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, QuantitativeValue::valueReference());
    }
}