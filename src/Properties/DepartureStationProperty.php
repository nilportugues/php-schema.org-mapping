<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The station from which the train departs.
 */
class DepartureStationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/departureStation';
    const PROPERTY_NAME = 'departureStation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/TrainTrip',
    ];
}
