<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The identifier of the order item.
 */
class OrderItemNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/orderItemNumber';
    const PROPERTY_NAME = 'orderItemNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/OrderItem',
    ];
}
