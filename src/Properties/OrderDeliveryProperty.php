<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The delivery of the parcel related to this order or order item.
 */
class OrderDeliveryProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/orderDelivery';
    const PROPERTY_NAME = 'orderDelivery';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
        'http://schema.org/OrderItem',
    ];
}
