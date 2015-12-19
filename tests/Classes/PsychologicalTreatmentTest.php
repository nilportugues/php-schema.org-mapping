<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\PsychologicalTreatment;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PsychologicalTreatmentTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PsychologicalTreatmentTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PsychologicalTreatment::schemaUrl(), "http://schema.org/PsychologicalTreatment");
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PsychologicalTreatment::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PsychologicalTreatment::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PsychologicalTreatment::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PsychologicalTreatment::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PsychologicalTreatment::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PsychologicalTreatment::study());
    }
}