<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Identifier of the flight's departure gate.
 */
class DepartureGateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/departureGate';
    const PROPERTY_NAME = 'departureGate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Flight',
    ];
}
