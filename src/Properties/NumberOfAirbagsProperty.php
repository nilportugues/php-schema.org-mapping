<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number or type of airbags in the vehicle.
 */
class NumberOfAirbagsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numberOfAirbags';
    const PROPERTY_NAME = 'numberOfAirbags';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
