<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\MedicalRiskScore;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalRiskScoreTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalRiskScoreTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalRiskScore::schemaUrl(), "http://schema.org/MedicalRiskScore");
    }

    public function testAlgorithmWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskScore::algorithm());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskScore::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskScore::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskScore::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskScore::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskScore::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskScore::study());
    }
}