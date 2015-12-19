<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * For itemListElement values, you can use simple strings (e.g. "Peter", "Paul", "Mary"), existing entities, or use ListItem.
 */
class ItemListElementProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/itemListElement';
    const PROPERTY_NAME = 'itemListElement';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ItemList',
    ];
}
