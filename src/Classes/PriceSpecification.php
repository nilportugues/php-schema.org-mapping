<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\EligibleQuantity;
use NilPortugues\SchemaOrg\Properties\EligibleTransactionVolume;
use NilPortugues\SchemaOrg\Properties\MaxPrice;
use NilPortugues\SchemaOrg\Properties\MinPrice;
use NilPortugues\SchemaOrg\Properties\Price;
use NilPortugues\SchemaOrg\Properties\PriceCurrency;
use NilPortugues\SchemaOrg\Properties\ValidFrom;
use NilPortugues\SchemaOrg\Properties\ValidThrough;
use NilPortugues\SchemaOrg\Properties\ValueAddedTaxIncluded;

/**
 * Classes PriceSpecification
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A structured value representing a monetary amount. Typically, only the subclasses of this type are used for markup.
 */
class PriceSpecification
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/PriceSpecification";

   /**
    * Returns the URL of the current definition at http://schema.org
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
        return EligibleQuantity::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function eligibleTransactionVolume()
    {
        return EligibleTransactionVolume::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function maxPrice()
    {
        return MaxPrice::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function minPrice()
    {
        return MinPrice::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function price()
    {
        return Price::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function priceCurrency()
    {
        return PriceCurrency::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function validFrom()
    {
        return ValidFrom::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function validThrough()
    {
        return ValidThrough::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function valueAddedTaxIncluded()
    {
        return ValueAddedTaxIncluded::create(self::schemaUrl());
    }
}