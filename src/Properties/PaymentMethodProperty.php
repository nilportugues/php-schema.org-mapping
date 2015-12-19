<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The name of the credit card or other method of payment for the order.
 */
class PaymentMethodProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/paymentMethod';
    const PROPERTY_NAME = 'paymentMethod';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
        'http://schema.org/Invoice',
    ];
}
