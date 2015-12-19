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
use NilPortugues\SchemaOrg\Properties\AcceptedOfferProperty;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\BillingAddressProperty;
use NilPortugues\SchemaOrg\Properties\BrokerProperty;
use NilPortugues\SchemaOrg\Properties\ConfirmationNumberProperty;
use NilPortugues\SchemaOrg\Properties\CustomerProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\DiscountCodeProperty;
use NilPortugues\SchemaOrg\Properties\DiscountCurrencyProperty;
use NilPortugues\SchemaOrg\Properties\DiscountProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\IsGiftProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\MerchantProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\OrderDateProperty;
use NilPortugues\SchemaOrg\Properties\OrderDeliveryProperty;
use NilPortugues\SchemaOrg\Properties\OrderNumberProperty;
use NilPortugues\SchemaOrg\Properties\OrderStatusProperty;
use NilPortugues\SchemaOrg\Properties\OrderedItemProperty;
use NilPortugues\SchemaOrg\Properties\PartOfInvoiceProperty;
use NilPortugues\SchemaOrg\Properties\PaymentDueDateProperty;
use NilPortugues\SchemaOrg\Properties\PaymentDueProperty;
use NilPortugues\SchemaOrg\Properties\PaymentMethodIdProperty;
use NilPortugues\SchemaOrg\Properties\PaymentMethodProperty;
use NilPortugues\SchemaOrg\Properties\PaymentUrlProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\SellerProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes Order.
 */
class Order extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Order';

    /**
     * @return Mapping
     */
    public static function acceptedOffer()
    {
        return AcceptedOfferProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function additionalType()
    {
        return AdditionalTypeProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternateName()
    {
        return AlternateNameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function billingAddress()
    {
        return BillingAddressProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function broker()
    {
        return BrokerProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function confirmationNumber()
    {
        return ConfirmationNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function customer()
    {
        return CustomerProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function description()
    {
        return DescriptionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function discount()
    {
        return DiscountProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function discountCode()
    {
        return DiscountCodeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function discountCurrency()
    {
        return DiscountCurrencyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function isGift()
    {
        return IsGiftProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function merchant()
    {
        return MerchantProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function name()
    {
        return NameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function orderDate()
    {
        return OrderDateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function orderDelivery()
    {
        return OrderDeliveryProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function orderNumber()
    {
        return OrderNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function orderStatus()
    {
        return OrderStatusProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function orderedItem()
    {
        return OrderedItemProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function partOfInvoice()
    {
        return PartOfInvoiceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function paymentDue()
    {
        return PaymentDueProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function paymentDueDate()
    {
        return PaymentDueDateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function paymentMethod()
    {
        return PaymentMethodProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function paymentMethodId()
    {
        return PaymentMethodIdProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function paymentUrl()
    {
        return PaymentUrlProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function potentialAction()
    {
        return PotentialActionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sameAs()
    {
        return SameAsProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function seller()
    {
        return SellerProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
