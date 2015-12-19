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

use NilPortugues\SchemaOrg\Classes\PerformanceRole;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PerformanceRoleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PerformanceRoleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PerformanceRole::schemaUrl(), "http://schema.org/PerformanceRole");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::alternateName());
    }

    public function testCharacterNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::characterName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::description());
    }

    public function testEndDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::endDate());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::name());
    }

    public function testNamedPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::namedPosition());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::potentialAction());
    }

    public function testRoleNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::roleName());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::sameAs());
    }

    public function testStartDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::startDate());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::url());
    }
}