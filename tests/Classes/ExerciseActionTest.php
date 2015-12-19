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

use NilPortugues\SchemaOrg\Classes\ExerciseAction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ExerciseActionTest.
 */
class ExerciseActionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ExerciseAction::schemaUrl(), 'http://schema.org/ExerciseAction');
    }

    public function testActionStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::actionStatus());
    }

    public function testAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::agent());
    }

    public function testCourseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::course());
    }

    public function testDietWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::diet());
    }

    public function testDistanceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::distance());
    }

    public function testEndTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::endTime());
    }

    public function testErrorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::error());
    }

    public function testExerciseCourseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::exerciseCourse());
    }

    public function testExercisePlanWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::exercisePlan());
    }

    public function testExerciseRelatedDietWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::exerciseRelatedDiet());
    }

    public function testExerciseTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::exerciseType());
    }

    public function testFromLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::fromLocation());
    }

    public function testInstrumentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::instrument());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::location());
    }

    public function testObjectTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::objectType());
    }

    public function testOpponentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::opponent());
    }

    public function testParticipantWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::participant());
    }

    public function testResultWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::result());
    }

    public function testSportsActivityLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::sportsActivityLocation());
    }

    public function testSportsEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::sportsEvent());
    }

    public function testSportsTeamWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::sportsTeam());
    }

    public function testStartTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::startTime());
    }

    public function testTargetWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::target());
    }

    public function testToLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ExerciseAction::toLocation());
    }
}
