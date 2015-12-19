<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The geo coordinates of the place.
 */
class GeoProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/geo';
    const PROPERTY_NAME = 'geo';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Place',
    ];
}
