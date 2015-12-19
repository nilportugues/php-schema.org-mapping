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
use NilPortugues\SchemaOrg\Properties\EndTimeProperty;
use NilPortugues\SchemaOrg\Properties\ErrorProperty;
use NilPortugues\SchemaOrg\Properties\InstrumentProperty;
use NilPortugues\SchemaOrg\Properties\LocationProperty;
use NilPortugues\SchemaOrg\Properties\ObjectTypeProperty;
use NilPortugues\SchemaOrg\Properties\ParticipantProperty;
use NilPortugues\SchemaOrg\Properties\ResultProperty;
use NilPortugues\SchemaOrg\Properties\StartTimeProperty;
use NilPortugues\SchemaOrg\Properties\TargetProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes Action.
 */
class Action extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Action';

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
