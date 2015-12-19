<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The position of the steering wheel or similar device (mostly for cars).
 */
class SteeringPositionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/steeringPosition';
    const PROPERTY_NAME = 'steeringPosition';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
