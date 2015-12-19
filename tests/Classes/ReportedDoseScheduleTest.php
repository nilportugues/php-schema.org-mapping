<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\ReportedDoseSchedule;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ReportedDoseScheduleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ReportedDoseScheduleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ReportedDoseSchedule::schemaUrl(), "http://schema.org/ReportedDoseSchedule");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::alternateName());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::code());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::description());
    }

    public function testDoseUnitWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::doseUnit());
    }

    public function testDoseValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::doseValue());
    }

    public function testFrequencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::frequency());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::guideline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::potentialAction());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::relevantSpecialty());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::sameAs());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::study());
    }

    public function testTargetPopulationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::targetPopulation());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReportedDoseSchedule::url());
    }
}