<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The current status of the order item.
 */
class OrderItemStatusProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/orderItemStatus';
    const PROPERTY_NAME = 'orderItemStatus';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/OrderItem',
    ];
}
