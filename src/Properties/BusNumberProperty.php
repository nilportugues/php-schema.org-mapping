<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The unique identifier for the bus.
 */
class BusNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/busNumber';
    const PROPERTY_NAME = 'busNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BusTrip',
    ];
}
