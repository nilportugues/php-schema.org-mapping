<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\IndividualProduct;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes IndividualProductTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class IndividualProductTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(IndividualProduct::schemaUrl(), "http://schema.org/IndividualProduct");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, IndividualProduct::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, IndividualProduct::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, IndividualProduct::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, IndividualProduct::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, IndividualProduct::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, IndividualProduct::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, IndividualProduct::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, IndividualProduct::sameAs());
    }

    public function testSerialNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, IndividualProduct::serialNumber());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, IndividualProduct::url());
    }
}