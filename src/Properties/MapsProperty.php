<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A URL to a map of the place.
 */
class MapsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/maps';
    const PROPERTY_NAME = 'maps';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Place',
    ];
}
