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

use NilPortugues\SchemaOrg\SchemaProperty;

/**
 * Where a taxi will pick up a passenger or a rental car can be picked up.
 */
class PickupLocationProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/pickupLocation';
    const PROPERTY_NAME = 'pickupLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/RentalCarReservation',
        'http://schema.org/TaxiReservation',
    ];
}
