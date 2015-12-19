<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The platform where the train arrives.
 */
class ArrivalPlatformProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/arrivalPlatform';
    const PROPERTY_NAME = 'arrivalPlatform';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/TrainTrip',
    ];
}
