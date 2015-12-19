<?php

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

/**
 * Classes PriceSpecification.
 */
class PriceSpecification
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/PriceSpecification';

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
