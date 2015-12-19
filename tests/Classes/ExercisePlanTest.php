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

use NilPortugues\SchemaOrg\Classes\ExercisePlan;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ExercisePlanTest.
 */
class ExercisePlanTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ExercisePlan::schemaUrl(), 'http://schema.org/ExercisePlan');
    }

    public function testActivityDurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::activityDuration());
    }

    public function testActivityFrequencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::activityFrequency());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::additionalType());
    }

    public function testAdditionalVariableWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::additionalVariable());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::alternateName());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::code());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::description());
    }

    public function testExerciseTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::exerciseType());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::guideline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::image());
    }

    public function testIntensityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::intensity());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::potentialAction());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::relevantSpecialty());
    }

    public function testRepetitionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::repetitions());
    }

    public function testRestPeriodsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::restPeriods());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::sameAs());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::study());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::url());
    }

    public function testWorkloadWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExercisePlan::workload());
    }
}
