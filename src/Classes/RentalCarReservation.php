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
 * @method static \NilPortugues\SchemaOrg\Properties\PickupLocationProperty pickupLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\DropoffLocationProperty dropoffLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\PickupTimeProperty pickupTime()
 * @method static \NilPortugues\SchemaOrg\Properties\DropoffTimeProperty dropoffTime()
 * METHODEND.
 *
 * A reservation for a rental car.Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 */
class RentalCarReservation extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/RentalCarReservation';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'dropoffLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DropoffLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\RentalCarReservation',
        ],
        'dropoffTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DropoffTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\RentalCarReservation',
        ],
        'pickupLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PickupLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\RentalCarReservation',
        ],
        'pickupTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PickupTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\RentalCarReservation',
        ],
    ];
}
