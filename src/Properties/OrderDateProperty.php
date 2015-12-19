<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Date order was placed.
 */
class OrderDateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/orderDate';
    const PROPERTY_NAME = 'orderDate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
    ];
}
