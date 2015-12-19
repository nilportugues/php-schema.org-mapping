<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The expected arrival time.
 */
class ArrivalTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/arrivalTime';
    const PROPERTY_NAME = 'arrivalTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BusTrip',
        'http://schema.org/Flight',
        'http://schema.org/TrainTrip',
    ];
}
