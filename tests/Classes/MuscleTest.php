<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Muscle;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MuscleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MuscleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Muscle::schemaUrl(), "http://schema.org/Muscle");
    }

    public function testActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Muscle::action());
    }

    public function testAntagonistWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Muscle::antagonist());
    }

    public function testBloodSupplyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Muscle::bloodSupply());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Muscle::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Muscle::guideline());
    }

    public function testInsertionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Muscle::insertion());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Muscle::medicineSystem());
    }

    public function testMuscleActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Muscle::muscleAction());
    }

    public function testNerveWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Muscle::nerve());
    }

    public function testOriginWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Muscle::origin());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Muscle::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Muscle::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Muscle::study());
    }
}