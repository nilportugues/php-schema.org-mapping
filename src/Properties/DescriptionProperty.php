<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A short description of the item.
 */
class DescriptionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/description';
    const PROPERTY_NAME = 'description';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Thing',
    ];
}
