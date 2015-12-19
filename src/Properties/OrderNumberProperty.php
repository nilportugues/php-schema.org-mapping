<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The identifier of the transaction.
 */
class OrderNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/orderNumber';
    const PROPERTY_NAME = 'orderNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
    ];
}
