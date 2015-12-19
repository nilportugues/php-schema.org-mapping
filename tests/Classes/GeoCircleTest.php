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

use NilPortugues\SchemaOrg\Classes\GeoCircle;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GeoCircleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class GeoCircleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(GeoCircle::schemaUrl(), "http://schema.org/GeoCircle");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::additionalType());
    }

    public function testAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::address());
    }

    public function testAddressCountryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::addressCountry());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::alternateName());
    }

    public function testBoxWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::box());
    }

    public function testCircleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::circle());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::description());
    }

    public function testElevationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::elevation());
    }

    public function testGeoMidpointWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::geoMidpoint());
    }

    public function testGeoRadiusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::geoRadius());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::image());
    }

    public function testLineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::line());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::name());
    }

    public function testPolygonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::polygon());
    }

    public function testPostalCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::postalCode());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GeoCircle::url());
    }
}