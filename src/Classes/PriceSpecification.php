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
use NilPortugues\SchemaOrg\Properties\EligibleQuantityProperty;
use NilPortugues\SchemaOrg\Properties\EligibleTransactionVolumeProperty;
use NilPortugues\SchemaOrg\Properties\MaxPriceProperty;
use NilPortugues\SchemaOrg\Properties\MinPriceProperty;
use NilPortugues\SchemaOrg\Properties\PriceCurrencyProperty;
use NilPortugues\SchemaOrg\Properties\PriceProperty;
use NilPortugues\SchemaOrg\Properties\ValidFromProperty;
use NilPortugues\SchemaOrg\Properties\ValidThroughProperty;
use NilPortugues\SchemaOrg\Properties\ValueAddedTaxIncludedProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes PriceSpecification.
 */
class PriceSpecification extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/PriceSpecification';

    /**
     * @return Mapping
     */
    public static function eligibleQuantity()
    {
        return EligibleQuantityProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function eligibleTransactionVolume()
    {
        return EligibleTransactionVolumeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function maxPrice()
    {
        return MaxPriceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function minPrice()
    {
        return MinPriceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function price()
    {
        return PriceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function priceCurrency()
    {
        return PriceCurrencyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function validFrom()
    {
        return ValidFromProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function validThrough()
    {
        return ValidThroughProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function valueAddedTaxIncluded()
    {
        return ValueAddedTaxIncludedProperty::create(self::schemaUrl());
    }
}
