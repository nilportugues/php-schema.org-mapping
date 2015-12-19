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
 * @method static \NilPortugues\SchemaOrg\Properties\EndTimeProperty endTime()
 * @method static \NilPortugues\SchemaOrg\Properties\StartTimeProperty startTime()
 * @method static \NilPortugues\SchemaOrg\Properties\PartySizeProperty partySize()
 * METHODEND.
 *
 * A reservation to dine at a food-related business.Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 */
class FoodEstablishmentReservation extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/FoodEstablishmentReservation';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'endTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EndTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\FoodEstablishmentReservation',
        ],
        'partySize' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PartySizeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\FoodEstablishmentReservation',
        ],
        'startTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StartTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\FoodEstablishmentReservation',
        ],
    ];
}
