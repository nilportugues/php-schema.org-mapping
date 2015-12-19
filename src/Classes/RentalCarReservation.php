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
use NilPortugues\SchemaOrg\Properties\DropoffLocationProperty;
use NilPortugues\SchemaOrg\Properties\DropoffTimeProperty;
use NilPortugues\SchemaOrg\Properties\PickupLocationProperty;
use NilPortugues\SchemaOrg\Properties\PickupTimeProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes RentalCarReservation.
 */
class RentalCarReservation extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/RentalCarReservation';

    /**
     * @return Mapping
     */
    public static function dropoffLocation()
    {
        return DropoffLocationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dropoffTime()
    {
        return DropoffTimeProperty::create(self::schemaUrl());
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
