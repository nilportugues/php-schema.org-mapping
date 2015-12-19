<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The name of the item.
 */
class NameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/name';
    const PROPERTY_NAME = 'name';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Thing',
    ];
}
