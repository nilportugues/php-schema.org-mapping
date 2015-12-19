<?php
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

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::study());
    }

    public function testSubTestWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTestPanel::subTest());
    }
}