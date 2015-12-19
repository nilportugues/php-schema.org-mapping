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
use NilPortugues\SchemaOrg\Properties\EndTimeProperty;
use NilPortugues\SchemaOrg\Properties\PartySizeProperty;
use NilPortugues\SchemaOrg\Properties\StartTimeProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes FoodEstablishmentReservation.
 */
class FoodEstablishmentReservation extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/FoodEstablishmentReservation';

    /**
     * @return Mapping
     */
    public static function endTime()
    {
        return EndTimeProperty::create(self::schemaUrl());
    }

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
    public static function startTime()
    {
        return StartTimeProperty::create(self::schemaUrl());
    }
}
