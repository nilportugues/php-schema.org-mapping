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
use NilPortugues\SchemaOrg\Properties\CheckinTimeProperty;
use NilPortugues\SchemaOrg\Properties\CheckoutTimeProperty;
use NilPortugues\SchemaOrg\Properties\LodgingUnitDescriptionProperty;
use NilPortugues\SchemaOrg\Properties\LodgingUnitTypeProperty;
use NilPortugues\SchemaOrg\Properties\NumAdultsProperty;
use NilPortugues\SchemaOrg\Properties\NumChildrenProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes LodgingReservation.
 */
class LodgingReservation extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/LodgingReservation';

    /**
     * @return Mapping
     */
    public static function checkinTime()
    {
        return CheckinTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function checkoutTime()
    {
        return CheckoutTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function lodgingUnitDescription()
    {
        return LodgingUnitDescriptionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function lodgingUnitType()
    {
        return LodgingUnitTypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function numAdults()
    {
        return NumAdultsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function numChildren()
    {
        return NumChildrenProperty::create(self::schemaUrl());
    }
}
