<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\RecommendedDoseSchedule;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes RecommendedDoseScheduleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class RecommendedDoseScheduleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(RecommendedDoseSchedule::schemaUrl(), "http://schema.org/RecommendedDoseSchedule");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RecommendedDoseSchedule::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RecommendedDoseSchedule::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RecommendedDoseSchedule::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RecommendedDoseSchedule::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RecommendedDoseSchedule::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RecommendedDoseSchedule::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RecommendedDoseSchedule::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RecommendedDoseSchedule::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RecommendedDoseSchedule::url());
    }
}