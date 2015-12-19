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

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\FolloweeProperty followee()
 * @method static \NilPortugues\SchemaOrg\Properties\AgentProperty agent()
 * @method static \NilPortugues\SchemaOrg\Properties\EndTimeProperty endTime()
 * @method static \NilPortugues\SchemaOrg\Properties\InstrumentProperty instrument()
 * @method static \NilPortugues\SchemaOrg\Properties\LocationProperty location()
 * @method static \NilPortugues\SchemaOrg\Properties\ObjectTypeProperty objectType()
 * @method static \NilPortugues\SchemaOrg\Properties\ParticipantProperty participant()
 * @method static \NilPortugues\SchemaOrg\Properties\ResultProperty result()
 * @method static \NilPortugues\SchemaOrg\Properties\StartTimeProperty startTime()
 * @method static \NilPortugues\SchemaOrg\Properties\ActionStatusProperty actionStatus()
 * @method static \NilPortugues\SchemaOrg\Properties\ErrorProperty error()
 * @method static \NilPortugues\SchemaOrg\Properties\TargetProperty target()
 * METHODEND.
 *
 * The act of forming a personal connection with someone/something (object) unidirectionally/asymmetrically to get updates polled from.Related actions:BefriendAction: Unlike BefriendAction, FollowAction implies that the connection is *not* necessarily reciprocal.SubscribeAction: Unlike SubscribeAction, FollowAction implies that the follower acts as an active agent constantly/actively polling for updates.RegisterAction: Unlike RegisterAction, FollowAction implies that the agent is interested in continuing receiving updates from the object.JoinAction: Unlike JoinAction, FollowAction implies that the agent is interested in getting updates from the object.TrackAction: Unlike TrackAction, FollowAction refers to the polling of updates of all aspects of animate objects rather than the location of inanimate objects (e.g. you track a package, but you don't follow it).
 */
class FollowAction extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/FollowAction';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'actionStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActionStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'agent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AgentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'endTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EndTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'error' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ErrorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'followee' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FolloweeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\FollowAction',
        ],
        'instrument' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InstrumentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'location' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'objectType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ObjectTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'participant' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ParticipantProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'result' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ResultProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'startTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StartTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'target' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TargetProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
    ];
}
