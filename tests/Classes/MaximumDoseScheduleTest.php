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

use NilPortugues\SchemaOrg\Classes\MaximumDoseSchedule;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MaximumDoseScheduleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MaximumDoseScheduleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MaximumDoseSchedule::schemaUrl(), "http://schema.org/MaximumDoseSchedule");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::alternateName());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::code());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::description());
    }

    public function testDoseUnitWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::doseUnit());
    }

    public function testDoseValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::doseValue());
    }

    public function testFrequencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::frequency());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::guideline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::potentialAction());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::relevantSpecialty());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::sameAs());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::study());
    }

    public function testTargetPopulationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::targetPopulation());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MaximumDoseSchedule::url());
    }
}