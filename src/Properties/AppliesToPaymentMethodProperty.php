<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The payment method(s) to which the payment charge specification applies.
 */
class AppliesToPaymentMethodProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/appliesToPaymentMethod';
    const PROPERTY_NAME = 'appliesToPaymentMethod';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PaymentChargeSpecification',
    ];
}
