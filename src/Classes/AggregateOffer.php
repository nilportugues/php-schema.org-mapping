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
use NilPortugues\SchemaOrg\Properties\HighPriceProperty;
use NilPortugues\SchemaOrg\Properties\LowPriceProperty;
use NilPortugues\SchemaOrg\Properties\OfferCountProperty;
use NilPortugues\SchemaOrg\Properties\OffersProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes AggregateOffer.
 */
class AggregateOffer extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/AggregateOffer';

    /**
     * @return Mapping
     */
    public static function highPrice()
    {
        return HighPriceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function lowPrice()
    {
        return LowPriceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function offerCount()
    {
        return OfferCountProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function offers()
    {
        return OffersProperty::create(self::schemaUrl());
    }
}
