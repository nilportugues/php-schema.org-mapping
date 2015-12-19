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

/**
 * Classes FoodEstablishmentReservation.
 */
class FoodEstablishmentReservation
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/FoodEstablishmentReservation';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

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
