<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Type of ordering (e.g. Ascending, Descending, Unordered).
 */
class ItemListOrderProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/itemListOrder';
    const PROPERTY_NAME = 'itemListOrder';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ItemList',
    ];
}
