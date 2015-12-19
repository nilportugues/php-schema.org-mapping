<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The airport where the flight originates.
 */
class DepartureAirportProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/departureAirport';
    const PROPERTY_NAME = 'departureAirport';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Flight',
    ];
}
