<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\OrderDelivery;
use NilPortugues\SchemaOrg\Properties\OrderItemNumber;
use NilPortugues\SchemaOrg\Properties\OrderItemStatus;
use NilPortugues\SchemaOrg\Properties\OrderQuantity;
use NilPortugues\SchemaOrg\Properties\OrderedItem;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes OrderItem
 * @package NilPortugues\SchemaOrg\Classes
 *
 * An order item is a line of an order. It includes the quantity and shipping details of a bought offer.
 */
class OrderItem
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/OrderItem";

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
    public static function additionalType()
    {
        return AdditionalType::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function alternateName()
    {
        return AlternateName::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function description()
    {
        return Description::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function image()
    {
        return Image::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPage::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function name()
    {
        return Name::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function orderDelivery()
    {
        return OrderDelivery::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function orderItemNumber()
    {
        return OrderItemNumber::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function orderItemStatus()
    {
        return OrderItemStatus::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function orderQuantity()
    {
        return OrderQuantity::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function orderedItem()
    {
        return OrderedItem::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function potentialAction()
    {
        return PotentialAction::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function sameAs()
    {
        return SameAs::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}