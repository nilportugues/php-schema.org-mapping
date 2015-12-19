<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of passengers that can be seated in the vehicle, both in terms of the physical space available, and in terms of limitations set by law.
 */
class VehicleSeatingCapacityProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/vehicleSeatingCapacity';
    const PROPERTY_NAME = 'vehicleSeatingCapacity';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
