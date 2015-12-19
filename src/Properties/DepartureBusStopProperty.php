<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The stop or station from which the bus departs.
 */
class DepartureBusStopProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/departureBusStop';
    const PROPERTY_NAME = 'departureBusStop';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BusTrip',
    ];
}
