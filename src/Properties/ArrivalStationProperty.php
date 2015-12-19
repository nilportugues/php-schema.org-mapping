<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The station where the train trip ends.
 */
class ArrivalStationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/arrivalStation';
    const PROPERTY_NAME = 'arrivalStation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/TrainTrip',
    ];
}
