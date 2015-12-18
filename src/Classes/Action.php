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
 * Classes Action
 * @package NilPortugues\SchemaOrg\Classes
 *
 * An action performed by a direct agent and indirect participants upon a direct object. Optionally happens at a location with the help of an inanimate instrument. The execution of the action may produce a result. Specific action sub-type documentation specifies the exact expectation of each argument/role.
      See also blog post
      and Actions overview document.
 */
class Action
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Action";

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
        return ActionStatus::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function agent()
    {
        return Agent::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function endTime()
    {
        return EndTime::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function error()
    {
        return Error::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function instrument()
    {
        return Instrument::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function location()
    {
        return Location::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function object()
    {
        return Object::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function participant()
    {
        return Participant::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function result()
    {
        return Result::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function startTime()
    {
        return StartTime::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function target()
    {
        return Target::create(self::schemaUrl());
    }
}