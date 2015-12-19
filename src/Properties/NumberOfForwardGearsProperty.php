<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The total number of forward gears available for the transmission system of the vehicle.
 */
class NumberOfForwardGearsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numberOfForwardGears';
    const PROPERTY_NAME = 'numberOfForwardGears';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
