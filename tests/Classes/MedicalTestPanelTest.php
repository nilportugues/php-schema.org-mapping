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

use NilPortugues\SchemaOrg\Classes\MedicalTestPanel;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalTestPanelTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalTestPanelTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalTestPanel::schemaUrl(), "http://schema.org/MedicalTestPanel");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::additionalType());
    }

    public function testAffectedByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::affectedBy());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::alternateName());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::code());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::description());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::guideline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::name());
    }

    public function testNormalRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::normalRange());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::potentialAction());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::relevantSpecialty());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::sameAs());
    }

    public function testSignDetectedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::signDetected());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::study());
    }

    public function testSubTestWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::subTest());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::url());
    }

    public function testUsedToDiagnoseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::usedToDiagnose());
    }

    public function testUsesDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::usesDevice());
    }
}