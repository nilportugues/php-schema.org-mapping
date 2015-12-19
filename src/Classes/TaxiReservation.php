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
 * @method static \NilPortugues\SchemaOrg\Properties\PartySizeProperty partySize()
 * @method static \NilPortugues\SchemaOrg\Properties\PickupLocationProperty pickupLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\PickupTimeProperty pickupTime()
 * METHODEND.
 *
 * A reservation for a taxi.Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use http://schema.org/Offer.
 */
class TaxiReservation extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/TaxiReservation';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'partySize' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PartySizeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TaxiReservation',
        ],
        'pickupLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PickupLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TaxiReservation',
        ],
        'pickupTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PickupTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\TaxiReservation',
        ],
    ];
}
