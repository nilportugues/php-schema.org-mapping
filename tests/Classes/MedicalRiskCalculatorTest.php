<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\MedicalRiskCalculator;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalRiskCalculatorTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalRiskCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalRiskCalculator::schemaUrl(), "http://schema.org/MedicalRiskCalculator");
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskCalculator::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskCalculator::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskCalculator::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskCalculator::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskCalculator::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskCalculator::study());
    }
}