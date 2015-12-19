<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The item ordered.
 */
class OrderedItemProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/orderedItem';
    const PROPERTY_NAME = 'orderedItem';

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
