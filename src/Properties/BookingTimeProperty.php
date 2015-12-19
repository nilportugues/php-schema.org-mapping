<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date and time the reservation was booked.
 */
class BookingTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/bookingTime';
    const PROPERTY_NAME = 'bookingTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Reservation',
    ];
}
