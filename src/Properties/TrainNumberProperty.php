<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The unique identifier for the train.
 */
class TrainNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/trainNumber';
    const PROPERTY_NAME = 'trainNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/TrainTrip',
    ];
}
