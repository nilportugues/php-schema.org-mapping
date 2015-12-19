<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of items in an ItemList. Note that some descriptions might not fully describe all items in a list (e.g., multi-page pagination); in such cases, the numberOfItems would be for the entire list.
 */
class NumberOfItemsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numberOfItems';
    const PROPERTY_NAME = 'numberOfItems';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ItemList',
    ];
}
