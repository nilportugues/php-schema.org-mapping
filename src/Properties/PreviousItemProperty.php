<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A link to the ListItem that preceeds the current one.
 */
class PreviousItemProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/previousItem';
    const PROPERTY_NAME = 'previousItem';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ListItem',
    ];
}
