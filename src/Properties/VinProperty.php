<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The Vehicle Identification Number (VIN) is a unique serial number used by the automotive industry to identify individual motor vehicles.
 */
class VinProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/vehicleIdentificationNumber';
    const PROPERTY_NAME = 'vin';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
