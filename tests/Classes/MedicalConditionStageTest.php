<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\MedicalConditionStage;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalConditionStageTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalConditionStageTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalConditionStage::schemaUrl(), "http://schema.org/MedicalConditionStage");
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalConditionStage::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalConditionStage::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalConditionStage::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalConditionStage::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalConditionStage::relevantSpecialty());
    }

    public function testStageAsNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalConditionStage::stageAsNumber());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalConditionStage::study());
    }

    public function testSubStageSuffixWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalConditionStage::subStageSuffix());
    }
}