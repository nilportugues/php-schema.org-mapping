<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates the approximate radius of a GeoCircle (metres unless indicated otherwise via Distance notation).
 */
class GeoRadiusProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/geoRadius';
    const PROPERTY_NAME = 'geoRadius';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/GeoCircle',
    ];
}
