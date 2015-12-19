<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The platform from which the train departs.
 */
class DeparturePlatformProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/departurePlatform';
    const PROPERTY_NAME = 'departurePlatform';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/TrainTrip',
    ];
}
