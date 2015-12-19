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

use NilPortugues\SchemaOrg\Classes\DoseSchedule;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DoseScheduleTest.
 */
class DoseScheduleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DoseSchedule::schemaUrl(), 'http://schema.org/DoseSchedule');
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DoseSchedule::code());
    }

    public function testDoseUnitWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DoseSchedule::doseUnit());
    }

    public function testDoseValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DoseSchedule::doseValue());
    }

    public function testFrequencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DoseSchedule::frequency());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DoseSchedule::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DoseSchedule::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DoseSchedule::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DoseSchedule::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DoseSchedule::study());
    }

    public function testTargetPopulationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DoseSchedule::targetPopulation());
    }
}
