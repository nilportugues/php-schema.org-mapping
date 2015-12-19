<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Information about the engine or engines of the vehicle.
 */
class VehicleEngineProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/vehicleEngine';
    const PROPERTY_NAME = 'vehicleEngine';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
