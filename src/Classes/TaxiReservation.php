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

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\PartySizeProperty;
use NilPortugues\SchemaOrg\Properties\PickupLocationProperty;
use NilPortugues\SchemaOrg\Properties\PickupTimeProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes TaxiReservation.
 */
class TaxiReservation extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/TaxiReservation';

    /**
     * @return Mapping
     */
    public static function partySize()
    {
        return PartySizeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pickupLocation()
    {
        return PickupLocationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function pickupTime()
    {
        return PickupTimeProperty::create(self::schemaUrl());
    }
}
