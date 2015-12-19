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
 * @method static \NilPortugues\SchemaOrg\Properties\CheckinTimeProperty checkinTime()
 * @method static \NilPortugues\SchemaOrg\Properties\CheckoutTimeProperty checkoutTime()
 * @method static \NilPortugues\SchemaOrg\Properties\LodgingUnitTypeProperty lodgingUnitType()
 * @method static \NilPortugues\SchemaOrg\Properties\LodgingUnitDescriptionProperty lodgingUnitDescription()
 * @method static \NilPortugues\SchemaOrg\Properties\NumAdultsProperty numAdults()
 * @method static \NilPortugues\SchemaOrg\Properties\NumChildrenProperty numChildren()
 * METHODEND.
 *
 * A reservation for lodging at a hotel, motel, inn, etc.Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 */
class LodgingReservation extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/LodgingReservation';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'checkinTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CheckinTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\LodgingReservation',
        ],
        'checkoutTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CheckoutTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\LodgingReservation',
        ],
        'lodgingUnitDescription' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LodgingUnitDescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\LodgingReservation',
        ],
        'lodgingUnitType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LodgingUnitTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\LodgingReservation',
        ],
        'numAdults' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NumAdultsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\LodgingReservation',
        ],
        'numChildren' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NumChildrenProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\LodgingReservation',
        ],
    ];
}
