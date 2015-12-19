<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Genre of the creative work or group.
 */
class GenreProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/genre';
    const PROPERTY_NAME = 'genre';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
