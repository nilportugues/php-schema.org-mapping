<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\MedicalCode;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalCodeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalCodeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalCode::schemaUrl(), "http://schema.org/MedicalCode");
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCode::code());
    }

    public function testCodeValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCode::codeValue());
    }

    public function testCodingSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCode::codingSystem());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCode::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCode::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCode::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCode::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCode::study());
    }
}