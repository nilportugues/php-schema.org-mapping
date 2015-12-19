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
 * @method static \NilPortugues\SchemaOrg\Properties\DeliveryMethodProperty deliveryMethod()
 * @method static \NilPortugues\SchemaOrg\Properties\SenderProperty sender()
 * @method static \NilPortugues\SchemaOrg\Properties\FromLocationProperty fromLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\ToLocationProperty toLocation()
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
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * METHODEND.
 *
 * The act of physically/electronically taking delivery of an object thathas been transferred from an origin to a destination. Reciprocal of SendAction.Related actions:SendAction: The reciprocal of ReceiveAction.TakeAction: Unlike TakeAction, ReceiveAction does not imply that the ownership has been transfered (e.g. I can receive a package, but it does not mean the package is now mine).
 */
class ReceiveAction extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/ReceiveAction';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'actionStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActionStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'agent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AgentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'deliveryMethod' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DeliveryMethodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ReceiveAction',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'endTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EndTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'error' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ErrorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'fromLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FromLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TransferAction',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'instrument' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InstrumentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'location' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'objectType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ObjectTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'participant' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ParticipantProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'result' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ResultProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sender' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SenderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ReceiveAction',
        ],
        'startTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StartTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'target' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TargetProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Action',
        ],
        'toLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ToLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TransferAction',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
