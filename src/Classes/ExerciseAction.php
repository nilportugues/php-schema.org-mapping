<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ActionStatus;
use NilPortugues\SchemaOrg\Properties\Agent;
use NilPortugues\SchemaOrg\Properties\Course;
use NilPortugues\SchemaOrg\Properties\Diet;
use NilPortugues\SchemaOrg\Properties\Distance;
use NilPortugues\SchemaOrg\Properties\EndTime;
use NilPortugues\SchemaOrg\Properties\Error;
use NilPortugues\SchemaOrg\Properties\ExerciseCourse;
use NilPortugues\SchemaOrg\Properties\ExercisePlan;
use NilPortugues\SchemaOrg\Properties\ExerciseRelatedDiet;
use NilPortugues\SchemaOrg\Properties\ExerciseType;
use NilPortugues\SchemaOrg\Properties\FromLocation;
use NilPortugues\SchemaOrg\Properties\Instrument;
use NilPortugues\SchemaOrg\Properties\Location;
use NilPortugues\SchemaOrg\Properties\Object;
use NilPortugues\SchemaOrg\Properties\Opponent;
use NilPortugues\SchemaOrg\Properties\Participant;
use NilPortugues\SchemaOrg\Properties\Result;
use NilPortugues\SchemaOrg\Properties\SportsActivityLocation;
use NilPortugues\SchemaOrg\Properties\SportsEvent;
use NilPortugues\SchemaOrg\Properties\SportsTeam;
use NilPortugues\SchemaOrg\Properties\StartTime;
use NilPortugues\SchemaOrg\Properties\Target;
use NilPortugues\SchemaOrg\Properties\ToLocation;

/**
 * Classes ExerciseAction.
 */
class ExerciseAction
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/ExerciseAction';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

    /**
     * @return Mapping
     */
    public static function actionStatus()
    {
        return ActionStatus::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function agent()
    {
        return Agent::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function course()
    {
        return Course::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function diet()
    {
        return Diet::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function distance()
    {
        return Distance::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function endTime()
    {
        return EndTime::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function error()
    {
        return Error::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function exerciseCourse()
    {
        return ExerciseCourse::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function exercisePlan()
    {
        return ExercisePlan::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function exerciseRelatedDiet()
    {
        return ExerciseRelatedDiet::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function exerciseType()
    {
        return ExerciseType::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function fromLocation()
    {
        return FromLocation::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function instrument()
    {
        return Instrument::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function location()
    {
        return Location::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function object()
    {
        return Object::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function opponent()
    {
        return Opponent::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function participant()
    {
        return Participant::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function result()
    {
        return Result::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sportsActivityLocation()
    {
        return SportsActivityLocation::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sportsEvent()
    {
        return SportsEvent::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sportsTeam()
    {
        return SportsTeam::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function startTime()
    {
        return StartTime::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function target()
    {
        return Target::create(Action::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function toLocation()
    {
        return ToLocation::create(self::schemaUrl());
    }
}
