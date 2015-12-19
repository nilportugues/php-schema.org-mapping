<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Item(s) being shipped.
 */
class ItemShippedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/itemShipped';
    const PROPERTY_NAME = 'itemShipped';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ParcelDelivery',
    ];
}
