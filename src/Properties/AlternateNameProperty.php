<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An alias for the item.
 */
class AlternateNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/alternateName';
    const PROPERTY_NAME = 'alternateName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Thing',
    ];
}
