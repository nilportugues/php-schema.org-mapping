<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\GeoShape;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GeoShapeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class GeoShapeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(GeoShape::schemaUrl(), "http://schema.org/GeoShape");
    }

    public function testAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoShape::address());
    }

    public function testAddressCountryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoShape::addressCountry());
    }

    public function testBoxWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoShape::box());
    }

    public function testCircleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoShape::circle());
    }

    public function testElevationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoShape::elevation());
    }

    public function testLineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoShape::line());
    }

    public function testPolygonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoShape::polygon());
    }

    public function testPostalCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoShape::postalCode());
    }
}