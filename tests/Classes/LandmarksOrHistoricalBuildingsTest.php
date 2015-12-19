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

use NilPortugues\SchemaOrg\Classes\LandmarksOrHistoricalBuildings;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes LandmarksOrHistoricalBuildingsTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class LandmarksOrHistoricalBuildingsTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(LandmarksOrHistoricalBuildings::schemaUrl(), "http://schema.org/LandmarksOrHistoricalBuildings");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LandmarksOrHistoricalBuildings::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LandmarksOrHistoricalBuildings::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LandmarksOrHistoricalBuildings::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LandmarksOrHistoricalBuildings::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LandmarksOrHistoricalBuildings::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LandmarksOrHistoricalBuildings::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LandmarksOrHistoricalBuildings::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LandmarksOrHistoricalBuildings::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LandmarksOrHistoricalBuildings::url());
    }
}