<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The estimated time the flight will take.
 */
class EstimatedFlightDurationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/estimatedFlightDuration';
    const PROPERTY_NAME = 'estimatedFlightDuration';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Flight',
    ];
}
