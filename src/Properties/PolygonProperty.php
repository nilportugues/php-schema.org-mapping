<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A polygon is the area enclosed by a point-to-point path for which the starting and ending points are the same. A polygon is expressed as a series of four or more space delimited points where the first and final points are identical.
 */
class PolygonProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/polygon';
    const PROPERTY_NAME = 'polygon';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/GeoShape',
    ];
}
