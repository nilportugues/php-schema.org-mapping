<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ActionStatusProperty;
use NilPortugues\SchemaOrg\Properties\AgentProperty;
use NilPortugues\SchemaOrg\Properties\CourseProperty;
use NilPortugues\SchemaOrg\Properties\DietProperty;
use NilPortugues\SchemaOrg\Properties\DistanceProperty;
use NilPortugues\SchemaOrg\Properties\EndTimeProperty;
use NilPortugues\SchemaOrg\Properties\ErrorProperty;
use NilPortugues\SchemaOrg\Properties\ExerciseCourseProperty;
use NilPortugues\SchemaOrg\Properties\ExercisePlanProperty;
use NilPortugues\SchemaOrg\Properties\ExerciseRelatedDietProperty;
use NilPortugues\SchemaOrg\Properties\ExerciseTypeProperty;
use NilPortugues\SchemaOrg\Properties\FromLocationProperty;
use NilPortugues\SchemaOrg\Properties\InstrumentProperty;
use NilPortugues\SchemaOrg\Properties\LocationProperty;
use NilPortugues\SchemaOrg\Properties\ObjectTypeProperty;
use NilPortugues\SchemaOrg\Properties\OpponentProperty;
use NilPortugues\SchemaOrg\Properties\ParticipantProperty;
use NilPortugues\SchemaOrg\Properties\ResultProperty;
use NilPortugues\SchemaOrg\Properties\SportsActivityLocationProperty;
use NilPortugues\SchemaOrg\Properties\SportsEventProperty;
use NilPortugues\SchemaOrg\Properties\SportsTeamProperty;
use NilPortugues\SchemaOrg\Properties\StartTimeProperty;
use NilPortugues\SchemaOrg\Properties\TargetProperty;
use NilPortugues\SchemaOrg\Properties\ToLocationProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes ExerciseAction.
 */
class ExerciseAction extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/ExerciseAction';

    /**
     * @return Mapping
     */
    public static function actionStatus()
    {
        return ActionStatusProperty::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function agent()
    {
        return AgentProperty::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function course()
    {
        return CourseProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function diet()
    {
        return DietProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function distance()
    {
        return DistanceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function endTime()
    {
        return EndTimeProperty::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function error()
    {
        return ErrorProperty::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function exerciseCourse()
    {
        return ExerciseCourseProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function exercisePlan()
    {
        return ExercisePlanProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function exerciseRelatedDiet()
    {
        return ExerciseRelatedDietProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function exerciseType()
    {
        return ExerciseTypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function fromLocation()
    {
        return FromLocationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function instrument()
    {
        return InstrumentProperty::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function location()
    {
        return LocationProperty::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function objectType()
    {
        return ObjectTypeProperty::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function opponent()
    {
        return OpponentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function participant()
    {
        return ParticipantProperty::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function result()
    {
        return ResultProperty::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sportsActivityLocation()
    {
        return SportsActivityLocationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sportsEvent()
    {
        return SportsEventProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sportsTeam()
    {
        return SportsTeamProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function startTime()
    {
        return StartTimeProperty::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function target()
    {
        return TargetProperty::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function toLocation()
    {
        return ToLocationProperty::create(self::schemaUrl());
    }
}
