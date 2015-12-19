<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The name of the train (e.g. The Orient Express).
 */
class TrainNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/trainName';
    const PROPERTY_NAME = 'trainName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/TrainTrip',
    ];
}
