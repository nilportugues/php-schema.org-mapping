<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AcceptedOffer;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\BillingAddress;
use NilPortugues\SchemaOrg\Properties\Broker;
use NilPortugues\SchemaOrg\Properties\ConfirmationNumber;
use NilPortugues\SchemaOrg\Properties\Customer;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Discount;
use NilPortugues\SchemaOrg\Properties\DiscountCode;
use NilPortugues\SchemaOrg\Properties\DiscountCurrency;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\IsGift;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Merchant;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\OrderDate;
use NilPortugues\SchemaOrg\Properties\OrderDelivery;
use NilPortugues\SchemaOrg\Properties\OrderNumber;
use NilPortugues\SchemaOrg\Properties\OrderStatus;
use NilPortugues\SchemaOrg\Properties\OrderedItem;
use NilPortugues\SchemaOrg\Properties\PartOfInvoice;
use NilPortugues\SchemaOrg\Properties\PaymentDue;
use NilPortugues\SchemaOrg\Properties\PaymentDueDate;
use NilPortugues\SchemaOrg\Properties\PaymentMethod;
use NilPortugues\SchemaOrg\Properties\PaymentMethodId;
use NilPortugues\SchemaOrg\Properties\PaymentUrl;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Seller;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes Order
 * @package NilPortugues\SchemaOrg\Classes
 *
 * An order is a confirmation of a transaction (a receipt), which can contain multiple line items, each represented by an Offer that has been accepted by the customer.
 */
class Order
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Order";

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
    public static function acceptedOffer()
    {
        return AcceptedOffer::create(self::schemaUrl());
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
    public static function billingAddress()
    {
        return BillingAddress::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function broker()
    {
        return Broker::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function confirmationNumber()
    {
        return ConfirmationNumber::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function customer()
    {
        return Customer::create(self::schemaUrl());
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
    public static function discount()
    {
        return Discount::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function discountCode()
    {
        return DiscountCode::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function discountCurrency()
    {
        return DiscountCurrency::create(self::schemaUrl());
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
    public static function isGift()
    {
        return IsGift::create(self::schemaUrl());
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
    public static function merchant()
    {
        return Merchant::create(self::schemaUrl());
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
    public static function orderDate()
    {
        return OrderDate::create(self::schemaUrl());
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
    public static function orderNumber()
    {
        return OrderNumber::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function orderStatus()
    {
        return OrderStatus::create(self::schemaUrl());
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
    public static function partOfInvoice()
    {
        return PartOfInvoice::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function paymentDue()
    {
        return PaymentDue::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function paymentDueDate()
    {
        return PaymentDueDate::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function paymentMethod()
    {
        return PaymentMethod::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function paymentMethodId()
    {
        return PaymentMethodId::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function paymentUrl()
    {
        return PaymentUrl::create(self::schemaUrl());
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
    public static function seller()
    {
        return Seller::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}