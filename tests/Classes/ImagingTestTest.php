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

use NilPortugues\SchemaOrg\Classes\ImagingTest;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ImagingTestTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ImagingTestTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ImagingTest::schemaUrl(), "http://schema.org/ImagingTest");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::additionalType());
    }

    public function testAffectedByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::affectedBy());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::alternateName());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::code());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::description());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::guideline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::image());
    }

    public function testImagingTechniqueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::imagingTechnique());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::name());
    }

    public function testNormalRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::normalRange());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::potentialAction());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::relevantSpecialty());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::sameAs());
    }

    public function testSignDetectedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::signDetected());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::study());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::url());
    }

    public function testUsedToDiagnoseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::usedToDiagnose());
    }

    public function testUsesDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::usesDevice());
    }
}