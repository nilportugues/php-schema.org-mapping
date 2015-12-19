<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date of the first registration of the vehicle with the respective public authorities.
 */
class DateVehicleFirstRegisteredProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/dateVehicleFirstRegistered';
    const PROPERTY_NAME = 'dateVehicleFirstRegistered';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
