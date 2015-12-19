<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\MedicalSign;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalSignTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalSignTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalSign::schemaUrl(), "http://schema.org/MedicalSign");
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSign::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSign::guideline());
    }

    public function testIdentifyingExamWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSign::identifyingExam());
    }

    public function testIdentifyingTestWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSign::identifyingTest());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSign::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSign::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSign::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSign::study());
    }
}