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