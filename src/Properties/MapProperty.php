<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A URL to a map of the place.
 */
class MapProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/map';
    const PROPERTY_NAME = 'map';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Place',
    ];
}
