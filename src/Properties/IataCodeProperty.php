<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * IATA identifier for an airline or airport.
 */
class IataCodeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/iataCode';
    const PROPERTY_NAME = 'iataCode';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Airline',
        'http://schema.org/Airport',
    ];
}
