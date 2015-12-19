<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The row location of the reserved seat (e.g., B).
 */
class SeatRowProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/seatRow';
    const PROPERTY_NAME = 'seatRow';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Seat',
    ];
}
