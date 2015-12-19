<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Identifier of the flight's departure terminal.
 */
class DepartureTerminalProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/departureTerminal';
    const PROPERTY_NAME = 'departureTerminal';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Flight',
    ];
}
