<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A line is a point-to-point path consisting of two or more points. A line is expressed as a series of two or more point objects separated by space.
 */
class LineProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/line';
    const PROPERTY_NAME = 'line';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/GeoShape',
    ];
}
