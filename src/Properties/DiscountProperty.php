<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Any discount applied (to an Order).
 */
class DiscountProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/discount';
    const PROPERTY_NAME = 'discount';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
    ];
}
