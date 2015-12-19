<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The amount of fuel consumed for traveling a particular distance or temporal duration with the given vehicle (e.g. liters per 100 km).
 */
class FuelConsumptionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/fuelConsumption';
    const PROPERTY_NAME = 'fuelConsumption';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
