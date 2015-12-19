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

use NilPortugues\SchemaOrg\Classes\PropertyValue;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PropertyValueTest.
 */
class PropertyValueTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PropertyValue::schemaUrl(), 'http://schema.org/PropertyValue');
    }

    public function testMaxValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValue::maxValue());
    }

    public function testMinValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValue::minValue());
    }

    public function testPropertyIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValue::propertyID());
    }

    public function testUnitCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValue::unitCode());
    }

    public function testUnitTextWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValue::unitText());
    }

    public function testValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValue::value());
    }

    public function testValueReferenceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValue::valueReference());
    }
}
