<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The type of fuel suitable for the engine or engines of the vehicle. If the vehicle has only one engine, this property can be attached directly to the vehicle.
 */
class FuelTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/fuelType';
    const PROPERTY_NAME = 'fuelType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
        'http://schema.org/EngineSpecification',
    ];
}
