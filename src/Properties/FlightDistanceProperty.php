<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The distance of the flight.
 */
class FlightDistanceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/flightDistance';
    const PROPERTY_NAME = 'flightDistance';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Flight',
    ];
}
