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
 * @method static \NilPortugues\SchemaOrg\Properties\BoardingGroupProperty boardingGroup()
 * @method static \NilPortugues\SchemaOrg\Properties\PassengerSequenceNumberProperty passengerSequenceNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\SecurityScreeningProperty securityScreening()
 * @method static \NilPortugues\SchemaOrg\Properties\PassengerPriorityStatusProperty passengerPriorityStatus()
 * METHODEND.
 *
 * A reservation for air travel.Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use http://schema.org/Offer.
 */
class FlightReservation extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/FlightReservation';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'boardingGroup' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BoardingGroupProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\FlightReservation',
        ],
        'passengerPriorityStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PassengerPriorityStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\FlightReservation',
        ],
        'passengerSequenceNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PassengerSequenceNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\FlightReservation',
        ],
        'securityScreening' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SecurityScreeningProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\FlightReservation',
        ],
    ];
}
