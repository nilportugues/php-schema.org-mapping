<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The stop or station from which the bus arrives.
 */
class ArrivalBusStopProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/arrivalBusStop';
    const PROPERTY_NAME = 'arrivalBusStop';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BusTrip',
    ];
}
