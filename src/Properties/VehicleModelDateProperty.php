<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The release date of a vehicle model (often used to differentiate versions of the same make and model).
 */
class VehicleModelDateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/vehicleModelDate';
    const PROPERTY_NAME = 'vehicleModelDate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
