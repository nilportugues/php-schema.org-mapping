<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The kind of aircraft (e.g., "Boeing 747").
 */
class AircraftProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/aircraft';
    const PROPERTY_NAME = 'aircraft';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Flight',
    ];
}
