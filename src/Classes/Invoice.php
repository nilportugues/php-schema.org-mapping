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
 * @method static \NilPortugues\SchemaOrg\Properties\CategoryProperty category()
 * @method static \NilPortugues\SchemaOrg\Properties\ConfirmationNumberProperty confirmationNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\CustomerProperty customer()
 * @method static \NilPortugues\SchemaOrg\Properties\PaymentDueProperty paymentDue()
 * @method static \NilPortugues\SchemaOrg\Properties\PaymentDueDateProperty paymentDueDate()
 * @method static \NilPortugues\SchemaOrg\Properties\PaymentMethodProperty paymentMethod()
 * @method static \NilPortugues\SchemaOrg\Properties\PaymentMethodIdProperty paymentMethodId()
 * @method static \NilPortugues\SchemaOrg\Properties\ProviderProperty provider()
 * @method static \NilPortugues\SchemaOrg\Properties\BrokerProperty broker()
 * @method static \NilPortugues\SchemaOrg\Properties\TotalPaymentDueProperty totalPaymentDue()
 * @method static \NilPortugues\SchemaOrg\Properties\MinimumPaymentDueProperty minimumPaymentDue()
 * @method static \NilPortugues\SchemaOrg\Properties\AccountIdProperty accountId()
 * @method static \NilPortugues\SchemaOrg\Properties\ScheduledPaymentDateProperty scheduledPaymentDate()
 * @method static \NilPortugues\SchemaOrg\Properties\BillingPeriodProperty billingPeriod()
 * @method static \NilPortugues\SchemaOrg\Properties\PaymentStatusProperty paymentStatus()
 * @method static \NilPortugues\SchemaOrg\Properties\ReferencesOrderProperty referencesOrder()
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
 * A statement of the money due for goods or services; a bill.
 */
class Invoice extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Invoice';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'accountId' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AccountIdProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'billingPeriod' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BillingPeriodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'broker' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BrokerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'category' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CategoryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'confirmationNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ConfirmationNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'customer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CustomerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'minimumPaymentDue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MinimumPaymentDueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'paymentDue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PaymentDueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'paymentDueDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PaymentDueDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'paymentMethod' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PaymentMethodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'paymentMethodId' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PaymentMethodIdProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'paymentStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PaymentStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'provider' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProviderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'referencesOrder' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReferencesOrderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'scheduledPaymentDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ScheduledPaymentDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'totalPaymentDue' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TotalPaymentDueProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Invoice',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
