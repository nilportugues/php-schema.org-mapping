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
 * @method static \NilPortugues\SchemaOrg\Properties\SubReservationProperty subReservation()
 * METHODEND.
 *
 * A group of multiple reservations with common values for all sub-reservations.
 */
class ReservationPackage extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/ReservationPackage';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'subReservation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SubReservationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ReservationPackage',
        ],
    ];
}
