<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The airport where the flight terminates.
 */
class ArrivalAirportProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/arrivalAirport';
    const PROPERTY_NAME = 'arrivalAirport';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Flight',
    ];
}
