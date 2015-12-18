<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalProperty;
use NilPortugues\SchemaOrg\Properties\AggregateRating;
use NilPortugues\SchemaOrg\Properties\Audience;
use NilPortugues\SchemaOrg\Properties\Award;
use NilPortugues\SchemaOrg\Properties\Awards;
use NilPortugues\SchemaOrg\Properties\Brand;
use NilPortugues\SchemaOrg\Properties\Category;
use NilPortugues\SchemaOrg\Properties\Color;
use NilPortugues\SchemaOrg\Properties\Depth;
use NilPortugues\SchemaOrg\Properties\Gtin12;
use NilPortugues\SchemaOrg\Properties\Gtin13;
use NilPortugues\SchemaOrg\Properties\Gtin14;
use NilPortugues\SchemaOrg\Properties\Gtin8;
use NilPortugues\SchemaOrg\Properties\Height;
use NilPortugues\SchemaOrg\Properties\IsAccessoryOrSparePartFor;
use NilPortugues\SchemaOrg\Properties\IsConsumableFor;
use NilPortugues\SchemaOrg\Properties\IsRelatedTo;
use NilPortugues\SchemaOrg\Properties\IsSimilarTo;
use NilPortugues\SchemaOrg\Properties\ItemCondition;
use NilPortugues\SchemaOrg\Properties\Logo;
use NilPortugues\SchemaOrg\Properties\Manufacturer;
use NilPortugues\SchemaOrg\Properties\Model;
use NilPortugues\SchemaOrg\Properties\Mpn;
use NilPortugues\SchemaOrg\Properties\Offers;
use NilPortugues\SchemaOrg\Properties\ProductID;
use NilPortugues\SchemaOrg\Properties\ProductionDate;
use NilPortugues\SchemaOrg\Properties\PurchaseDate;
use NilPortugues\SchemaOrg\Properties\ReleaseDate;
use NilPortugues\SchemaOrg\Properties\Review;
use NilPortugues\SchemaOrg\Properties\Reviews;
use NilPortugues\SchemaOrg\Properties\Sku;
use NilPortugues\SchemaOrg\Properties\Weight;
use NilPortugues\SchemaOrg\Properties\Width;

/**
 * Classes Product.
 */
class Product
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Product';

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
    public static function additionalProperty()
    {
        return AdditionalProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function aggregateRating()
    {
        return AggregateRating::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function audience()
    {
        return Audience::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function award()
    {
        return Award::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function awards()
    {
        return Awards::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function brand()
    {
        return Brand::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function category()
    {
        return Category::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function color()
    {
        return Color::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function depth()
    {
        return Depth::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function gtin12()
    {
        return Gtin12::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function gtin13()
    {
        return Gtin13::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function gtin14()
    {
        return Gtin14::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function gtin8()
    {
        return Gtin8::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function height()
    {
        return Height::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isAccessoryOrSparePartFor()
    {
        return IsAccessoryOrSparePartFor::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isConsumableFor()
    {
        return IsConsumableFor::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isRelatedTo()
    {
        return IsRelatedTo::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isSimilarTo()
    {
        return IsSimilarTo::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function itemCondition()
    {
        return ItemCondition::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function logo()
    {
        return Logo::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function manufacturer()
    {
        return Manufacturer::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function model()
    {
        return Model::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mpn()
    {
        return Mpn::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function offers()
    {
        return Offers::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function productID()
    {
        return ProductID::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function productionDate()
    {
        return ProductionDate::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function purchaseDate()
    {
        return PurchaseDate::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function releaseDate()
    {
        return ReleaseDate::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function review()
    {
        return Review::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function reviews()
    {
        return Reviews::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sku()
    {
        return Sku::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function weight()
    {
        return Weight::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function width()
    {
        return Width::create(self::schemaUrl());
    }
}
