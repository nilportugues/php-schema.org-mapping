<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Identifier of the flight's arrival gate.
 */
class ArrivalGateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/arrivalGate';
    const PROPERTY_NAME = 'arrivalGate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Flight',
    ];
}
