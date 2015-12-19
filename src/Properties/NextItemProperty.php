<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A link to the ListItem that follows the current one.
 */
class NextItemProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/nextItem';
    const PROPERTY_NAME = 'nextItem';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ListItem',
    ];
}
