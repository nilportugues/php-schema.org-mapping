<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The location of the reserved seat (e.g., 27).
 */
class SeatNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/seatNumber';
    const PROPERTY_NAME = 'seatNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Seat',
    ];
}
