<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
 */
class PaymentMethodIdProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/paymentMethodId';
    const PROPERTY_NAME = 'paymentMethodId';

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
