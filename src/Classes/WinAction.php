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
use NilPortugues\SchemaOrg\Properties\LoserProperty;
use NilPortugues\SchemaOrg\Properties\ObjectTypeProperty;
use NilPortugues\SchemaOrg\Properties\ParticipantProperty;
use NilPortugues\SchemaOrg\Properties\ResultProperty;
use NilPortugues\SchemaOrg\Properties\StartTimeProperty;
use NilPortugues\SchemaOrg\Properties\TargetProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes WinAction.
 */
class WinAction extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/WinAction';

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
    public static function loser()
    {
        return LoserProperty::create(self::schemaUrl());
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
