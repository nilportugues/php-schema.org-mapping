<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The type of boarding policy used by the airline (e.g. zone-based or group-based).
 */
class BoardingPolicyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/boardingPolicy';
    const PROPERTY_NAME = 'boardingPolicy';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Airline',
        'http://schema.org/Flight',
    ];
}
