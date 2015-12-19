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

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\OrderDeliveryProperty orderDelivery()
 * @method static \NilPortugues\SchemaOrg\Properties\AcceptedOfferProperty acceptedOffer()
 * @method static \NilPortugues\SchemaOrg\Properties\BillingAddressProperty billingAddress()
 * @method static \NilPortugues\SchemaOrg\Properties\ConfirmationNumberProperty confirmationNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\CustomerProperty customer()
 * @method static \NilPortugues\SchemaOrg\Properties\DiscountProperty discount()
 * @method static \NilPortugues\SchemaOrg\Properties\DiscountCodeProperty discountCode()
 * @method static \NilPortugues\SchemaOrg\Properties\DiscountCurrencyProperty discountCurrency()
 * @method static \NilPortugues\SchemaOrg\Properties\IsGiftProperty isGift()
 * @method static \NilPortugues\SchemaOrg\Properties\MerchantProperty merchant()
 * @method static \NilPortugues\SchemaOrg\Properties\OrderDateProperty orderDate()
 * @method static \NilPortugues\SchemaOrg\Properties\OrderedItemProperty orderedItem()
 * @method static \NilPortugues\SchemaOrg\Properties\OrderNumberProperty orderNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\OrderStatusProperty orderStatus()
 * @method static \NilPortugues\SchemaOrg\Properties\PartOfInvoiceProperty partOfInvoice()
 * @method static \NilPortugues\SchemaOrg\Properties\PaymentDueProperty paymentDue()
 * @method static \NilPortugues\SchemaOrg\Properties\PaymentDueDateProperty paymentDueDate()
 * @method static \NilPortugues\SchemaOrg\Properties\PaymentMethodProperty paymentMethod()
 * @method static \NilPortugues\SchemaOrg\Properties\PaymentMethodIdProperty paymentMethodId()
 * @method static \NilPortugues\SchemaOrg\Properties\PaymentUrlProperty paymentUrl()
 * @method static \NilPortugues\SchemaOrg\Properties\SellerProperty seller()
 * @method static \NilPortugues\SchemaOrg\Properties\BrokerProperty broker()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * METHODEND.
 *
 * An order is a confirmation of a transaction (a receipt), which can contain multiple line items, each represented by an Offer that has been accepted by the customer.
 */
class Order extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Order';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'acceptedOffer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AcceptedOfferProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'billingAddress' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BillingAddressProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'broker' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BrokerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'confirmationNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ConfirmationNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'customer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CustomerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'discount' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DiscountProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'discountCode' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DiscountCodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'discountCurrency' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DiscountCurrencyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'isGift' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsGiftProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'merchant' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MerchantProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'orderDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OrderDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'orderDelivery' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OrderDeliveryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'orderNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OrderNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'orderStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OrderStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'orderedItem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OrderedItemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'partOfInvoice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PartOfInvoiceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'paymentDue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PaymentDueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'paymentDueDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PaymentDueDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'paymentMethod' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PaymentMethodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'paymentMethodId' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PaymentMethodIdProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'paymentUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PaymentUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'seller' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SellerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Order',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
