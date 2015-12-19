<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The position of an item in a series or sequence of items.
 */
class PositionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/position';
    const PROPERTY_NAME = 'position';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/ListItem',
    ];
}
