<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Party placing the order or paying the invoice.
 */
class CustomerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/customer';
    const PROPERTY_NAME = 'customer';

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
