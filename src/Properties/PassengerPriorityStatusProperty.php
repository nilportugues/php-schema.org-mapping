<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The priority status assigned to a passenger for security or boarding (e.g. FastTrack or Priority).
 */
class PassengerPriorityStatusProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/passengerPriorityStatus';
    const PROPERTY_NAME = 'passengerPriorityStatus';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/FlightReservation',
    ];
}
