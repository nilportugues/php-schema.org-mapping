<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ActionStatus;
use NilPortugues\SchemaOrg\Properties\Agent;
use NilPortugues\SchemaOrg\Properties\EndTime;
use NilPortugues\SchemaOrg\Properties\Error;
use NilPortugues\SchemaOrg\Properties\Instrument;
use NilPortugues\SchemaOrg\Properties\Location;
use NilPortugues\SchemaOrg\Properties\Object;
use NilPortugues\SchemaOrg\Properties\Participant;
use NilPortugues\SchemaOrg\Properties\Result;
use NilPortugues\SchemaOrg\Properties\StartTime;
use NilPortugues\SchemaOrg\Properties\Target;

/**
 * Classes CheckAction
 * @package NilPortugues\SchemaOrg\Classes
 *
 * An agent inspects/determines/investigates/inquire or examine an object's accuracy/quality/condition or state.
 */
class CheckAction
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/CheckAction";

   /**
    * Returns the URL of the current definition at http://schema.org
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
}