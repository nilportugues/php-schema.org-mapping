<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date that payment is due.
 */
class PaymentDueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/paymentDue';
    const PROPERTY_NAME = 'paymentDue';

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
