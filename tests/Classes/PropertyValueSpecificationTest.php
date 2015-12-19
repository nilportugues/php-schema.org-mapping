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

use NilPortugues\SchemaOrg\Classes\PropertyValueSpecification;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PropertyValueSpecificationTest.
 */
class PropertyValueSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PropertyValueSpecification::schemaUrl(), 'http://schema.org/PropertyValueSpecification');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::alternateName());
    }

    public function testDefaultValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::defaultValue());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::mainEntityOfPage());
    }

    public function testMaxValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::maxValue());
    }

    public function testMinValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::minValue());
    }

    public function testMultipleValuesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::multipleValues());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::potentialAction());
    }

    public function testReadonlyValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::readonlyValue());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::sameAs());
    }

    public function testStepValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::stepValue());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::url());
    }

    public function testValueMaxLengthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::valueMaxLength());
    }

    public function testValueMinLengthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::valueMinLength());
    }

    public function testValueNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::valueName());
    }

    public function testValuePatternWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::valuePattern());
    }

    public function testValueRequiredWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PropertyValueSpecification::valueRequired());
    }
}
