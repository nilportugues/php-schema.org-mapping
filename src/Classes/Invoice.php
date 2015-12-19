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
use NilPortugues\SchemaOrg\Properties\AccountIdProperty;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\BillingPeriodProperty;
use NilPortugues\SchemaOrg\Properties\BrokerProperty;
use NilPortugues\SchemaOrg\Properties\CategoryProperty;
use NilPortugues\SchemaOrg\Properties\ConfirmationNumberProperty;
use NilPortugues\SchemaOrg\Properties\CustomerProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\MinimumPaymentDueProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PaymentDueDateProperty;
use NilPortugues\SchemaOrg\Properties\PaymentDueProperty;
use NilPortugues\SchemaOrg\Properties\PaymentMethodIdProperty;
use NilPortugues\SchemaOrg\Properties\PaymentMethodProperty;
use NilPortugues\SchemaOrg\Properties\PaymentStatusProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ProviderProperty;
use NilPortugues\SchemaOrg\Properties\ReferencesOrderProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\ScheduledPaymentDateProperty;
use NilPortugues\SchemaOrg\Properties\TotalPaymentDueProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes Invoice.
 */
class Invoice extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Invoice';

    /**
     * @return Mapping
     */
    public static function accountId()
    {
        return AccountIdProperty::create(self::schemaUrl());
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
    public static function billingPeriod()
    {
        return BillingPeriodProperty::create(self::schemaUrl());
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
    public static function category()
    {
        return CategoryProperty::create(self::schemaUrl());
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
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
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
    public static function minimumPaymentDue()
    {
        return MinimumPaymentDueProperty::create(self::schemaUrl());
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
    public static function paymentStatus()
    {
        return PaymentStatusProperty::create(self::schemaUrl());
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
    public static function provider()
    {
        return ProviderProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function referencesOrder()
    {
        return ReferencesOrderProperty::create(self::schemaUrl());
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
    public static function scheduledPaymentDate()
    {
        return ScheduledPaymentDateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function totalPaymentDue()
    {
        return TotalPaymentDueProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
