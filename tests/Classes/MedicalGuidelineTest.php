<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\MedicalGuideline;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalGuidelineTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalGuidelineTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalGuideline::schemaUrl(), "http://schema.org/MedicalGuideline");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuideline::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuideline::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuideline::description());
    }

    public function testEvidenceLevelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuideline::evidenceLevel());
    }

    public function testEvidenceOriginWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuideline::evidenceOrigin());
    }

    public function testGuidelineDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuideline::guidelineDate());
    }

    public function testGuidelineSubjectWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuideline::guidelineSubject());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuideline::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuideline::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuideline::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuideline::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuideline::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuideline::url());
    }
}