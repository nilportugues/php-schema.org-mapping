<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\ImagingTest;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ImagingTestTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ImagingTestTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ImagingTest::schemaUrl(), "http://schema.org/ImagingTest");
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::guideline());
    }

    public function testImagingTechniqueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::imagingTechnique());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ImagingTest::study());
    }
}