<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The airline-specific indicator of boarding order / preference.
 */
class BoardingGroupProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/boardingGroup';
    const PROPERTY_NAME = 'boardingGroup';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/FlightReservation',
    ];
}
