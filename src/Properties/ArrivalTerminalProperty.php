<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Identifier of the flight's arrival terminal.
 */
class ArrivalTerminalProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/arrivalTerminal';
    const PROPERTY_NAME = 'arrivalTerminal';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Flight',
    ];
}
