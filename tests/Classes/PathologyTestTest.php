<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\PathologyTest;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PathologyTestTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PathologyTestTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PathologyTest::schemaUrl(), "http://schema.org/PathologyTest");
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PathologyTest::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PathologyTest::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PathologyTest::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PathologyTest::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PathologyTest::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PathologyTest::study());
    }

    public function testTissueSampleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PathologyTest::tissueSample());
    }
}