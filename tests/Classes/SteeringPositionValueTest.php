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

use NilPortugues\SchemaOrg\Classes\SteeringPositionValue;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes SteeringPositionValueTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class SteeringPositionValueTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(SteeringPositionValue::schemaUrl(), "http://schema.org/SteeringPositionValue");
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::additionalProperty());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::description());
    }

    public function testEqualWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::equal());
    }

    public function testGreaterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::greater());
    }

    public function testGreaterOrEqualWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::greaterOrEqual());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::image());
    }

    public function testLesserWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::lesser());
    }

    public function testLesserOrEqualWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::lesserOrEqual());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::name());
    }

    public function testNonEqualWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::nonEqual());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::sameAs());
    }

    public function testSupersededByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::supersededBy());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::url());
    }

    public function testValueReferenceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SteeringPositionValue::valueReference());
    }
}