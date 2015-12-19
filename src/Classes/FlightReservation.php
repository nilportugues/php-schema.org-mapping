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
use NilPortugues\SchemaOrg\Properties\BoardingGroupProperty;
use NilPortugues\SchemaOrg\Properties\PassengerPriorityStatusProperty;
use NilPortugues\SchemaOrg\Properties\PassengerSequenceNumberProperty;
use NilPortugues\SchemaOrg\Properties\SecurityScreeningProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes FlightReservation.
 */
class FlightReservation extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/FlightReservation';

    /**
     * @return Mapping
     */
    public static function boardingGroup()
    {
        return BoardingGroupProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function passengerPriorityStatus()
    {
        return PassengerPriorityStatusProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function passengerSequenceNumber()
    {
        return PassengerSequenceNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function securityScreening()
    {
        return SecurityScreeningProperty::create(self::schemaUrl());
    }
}
