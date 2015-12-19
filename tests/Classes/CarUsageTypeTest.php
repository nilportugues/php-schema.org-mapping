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

use NilPortugues\SchemaOrg\Classes\CarUsageType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes CarUsageTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class CarUsageTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(CarUsageType::schemaUrl(), "http://schema.org/CarUsageType");
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::additionalProperty());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::description());
    }

    public function testEqualWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::equal());
    }

    public function testGreaterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::greater());
    }

    public function testGreaterOrEqualWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::greaterOrEqual());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::image());
    }

    public function testLesserWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::lesser());
    }

    public function testLesserOrEqualWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::lesserOrEqual());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::name());
    }

    public function testNonEqualWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::nonEqual());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::sameAs());
    }

    public function testSupersededByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::supersededBy());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::url());
    }

    public function testValueReferenceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CarUsageType::valueReference());
    }
}