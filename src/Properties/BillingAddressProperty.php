<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The billing address for the order.
 */
class BillingAddressProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/billingAddress';
    const PROPERTY_NAME = 'billingAddress';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
    ];
}
