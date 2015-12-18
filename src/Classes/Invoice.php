<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AccountId;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\BillingPeriod;
use NilPortugues\SchemaOrg\Properties\Broker;
use NilPortugues\SchemaOrg\Properties\Category;
use NilPortugues\SchemaOrg\Properties\ConfirmationNumber;
use NilPortugues\SchemaOrg\Properties\Customer;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\MinimumPaymentDue;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PaymentDue;
use NilPortugues\SchemaOrg\Properties\PaymentDueDate;
use NilPortugues\SchemaOrg\Properties\PaymentMethod;
use NilPortugues\SchemaOrg\Properties\PaymentMethodId;
use NilPortugues\SchemaOrg\Properties\PaymentStatus;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\Provider;
use NilPortugues\SchemaOrg\Properties\ReferencesOrder;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\ScheduledPaymentDate;
use NilPortugues\SchemaOrg\Properties\TotalPaymentDue;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes Invoice.
 */
class Invoice
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Invoice';

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
    public static function accountId()
    {
        return AccountId::create(self::schemaUrl());
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
    public static function billingPeriod()
    {
        return BillingPeriod::create(self::schemaUrl());
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
    public static function category()
    {
        return Category::create(self::schemaUrl());
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
    public static function minimumPaymentDue()
    {
        return MinimumPaymentDue::create(self::schemaUrl());
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
    public static function paymentStatus()
    {
        return PaymentStatus::create(self::schemaUrl());
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
    public static function provider()
    {
        return Provider::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function referencesOrder()
    {
        return ReferencesOrder::create(self::schemaUrl());
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
    public static function scheduledPaymentDate()
    {
        return ScheduledPaymentDate::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function totalPaymentDue()
    {
        return TotalPaymentDue::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}
