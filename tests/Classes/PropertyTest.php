<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Property;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PropertyTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PropertyTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Property::schemaUrl(), "http://schema.org/Property");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Property::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Property::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Property::description());
    }

    public function testDomainIncludesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Property::domainIncludes());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Property::image());
    }

    public function testInverseOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Property::inverseOf());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Property::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Property::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Property::potentialAction());
    }

    public function testRangeIncludesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Property::rangeIncludes());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Property::sameAs());
    }

    public function testSupersededByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Property::supersededBy());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Property::url());
    }
}