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
 * Classes DeleteAction.
 */
class DeleteAction
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/DeleteAction';

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
}
