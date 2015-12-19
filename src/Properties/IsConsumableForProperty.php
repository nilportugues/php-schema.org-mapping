<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A pointer to another product (or multiple products) for which this product is a consumable.
 */
class IsConsumableForProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/isConsumableFor';
    const PROPERTY_NAME = 'isConsumableFor';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Product',
    ];
}
