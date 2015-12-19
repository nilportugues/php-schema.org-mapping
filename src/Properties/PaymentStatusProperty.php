<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The status of payment; whether the invoice has been paid or not.
 */
class PaymentStatusProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/paymentStatus';
    const PROPERTY_NAME = 'paymentStatus';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Invoice',
    ];
}
