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

use NilPortugues\SchemaOrg\Classes\MedicalDevice;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalDeviceTest.
 */
class MedicalDeviceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalDevice::schemaUrl(), 'http://schema.org/MedicalDevice');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::additionalType());
    }

    public function testAdverseOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::adverseOutcome());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::alternateName());
    }

    public function testContraindicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::contraindication());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::image());
    }

    public function testIndicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::indication());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::name());
    }

    public function testPostOpWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::postOp());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::potentialAction());
    }

    public function testPreOpWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::preOp());
    }

    public function testProcedureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::procedure());
    }

    public function testPurposeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::purpose());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::sameAs());
    }

    public function testSeriousAdverseOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::seriousAdverseOutcome());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalDevice::url());
    }
}
