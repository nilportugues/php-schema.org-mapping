<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\MedicalSignOrSymptom;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalSignOrSymptomTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalSignOrSymptomTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalSignOrSymptom::schemaUrl(), "http://schema.org/MedicalSignOrSymptom");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSignOrSymptom::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSignOrSymptom::alternateName());
    }

    public function testCauseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSignOrSymptom::cause());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSignOrSymptom::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSignOrSymptom::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSignOrSymptom::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSignOrSymptom::name());
    }

    public function testPossibleTreatmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSignOrSymptom::possibleTreatment());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSignOrSymptom::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSignOrSymptom::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalSignOrSymptom::url());
    }
}