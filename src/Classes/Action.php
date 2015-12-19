<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\ActionStatusProperty;
use NilPortugues\SchemaOrg\Properties\AgentProperty;
use NilPortugues\SchemaOrg\Properties\EndTimeProperty;
use NilPortugues\SchemaOrg\Properties\ErrorProperty;
use NilPortugues\SchemaOrg\Properties\InstrumentProperty;
use NilPortugues\SchemaOrg\Properties\LocationProperty;
use NilPortugues\SchemaOrg\Properties\ObjectTypeProperty;
use NilPortugues\SchemaOrg\Properties\ParticipantProperty;
use NilPortugues\SchemaOrg\Properties\ResultProperty;
use NilPortugues\SchemaOrg\Properties\StartTimeProperty;
use NilPortugues\SchemaOrg\Properties\TargetProperty;

/**
 * Classes Action.
 */
class Action
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Action';

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
        return ActionStatusProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function agent()
    {
        return AgentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function endTime()
    {
        return EndTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function error()
    {
        return ErrorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function instrument()
    {
        return InstrumentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function location()
    {
        return LocationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function objectType()
    {
        return ObjectTypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function participant()
    {
        return ParticipantProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function result()
    {
        return ResultProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function startTime()
    {
        return StartTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function target()
    {
        return TargetProperty::create(self::schemaUrl());
    }
}
