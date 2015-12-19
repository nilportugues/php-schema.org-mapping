<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The color or color combination of the interior of the vehicle.
 */
class VehicleInteriorColorProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/vehicleInteriorColor';
    const PROPERTY_NAME = 'vehicleInteriorColor';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
