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

use NilPortugues\SchemaOrg\Classes\MedicalTest;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalTestTest.
 */
class MedicalTestTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalTest::schemaUrl(), 'http://schema.org/MedicalTest');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::additionalType());
    }

    public function testAffectedByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::affectedBy());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::name());
    }

    public function testNormalRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::normalRange());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::sameAs());
    }

    public function testSignDetectedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::signDetected());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::url());
    }

    public function testUsedToDiagnoseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::usedToDiagnose());
    }

    public function testUsesDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTest::usesDevice());
    }
}
