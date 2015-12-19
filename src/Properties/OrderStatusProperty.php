<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The current status of the order.
 */
class OrderStatusProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/orderStatus';
    const PROPERTY_NAME = 'orderStatus';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
    ];
}
