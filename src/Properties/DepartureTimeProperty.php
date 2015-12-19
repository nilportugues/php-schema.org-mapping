<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The expected departure time.
 */
class DepartureTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/departureTime';
    const PROPERTY_NAME = 'departureTime';

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
