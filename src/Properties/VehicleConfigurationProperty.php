<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A short text indicating the configuration of the vehicle, e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
 */
class VehicleConfigurationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/vehicleConfiguration';
    const PROPERTY_NAME = 'vehicleConfiguration';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
