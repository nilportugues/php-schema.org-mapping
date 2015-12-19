<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates the GeoCoordinates at the centre of a GeoShape e.g. GeoCircle.
 */
class GeoMidpointProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/geoMidpoint';
    const PROPERTY_NAME = 'geoMidpoint';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/GeoCircle',
    ];
}
