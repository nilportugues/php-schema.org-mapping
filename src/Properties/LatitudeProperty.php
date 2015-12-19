<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The latitude of a location. For example 37.42242 (WGS 84).
 */
class LatitudeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/latitude';
    const PROPERTY_NAME = 'latitude';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/GeoCoordinates',
    ];
}
