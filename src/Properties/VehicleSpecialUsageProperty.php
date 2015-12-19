<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates whether the vehicle has been used for special purposes, like commercial rental, driving school, or as a taxi. The legislation in many countries requires this information to be revealed when offering a car for sale.
 */
class VehicleSpecialUsageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/vehicleSpecialUsage';
    const PROPERTY_NAME = 'vehicleSpecialUsage';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [

    ];
}
