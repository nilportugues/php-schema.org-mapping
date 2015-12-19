<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The longitude of a location. For example -122.08585 (WGS 84).
 */
class LongitudeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/longitude';
    const PROPERTY_NAME = 'longitude';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/GeoCoordinates',
    ];
}
