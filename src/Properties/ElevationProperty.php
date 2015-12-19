<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The elevation of a location (WGS 84).
 */
class ElevationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/elevation';
    const PROPERTY_NAME = 'elevation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/GeoCoordinates',
        'http://schema.org/GeoShape',
    ];
}
