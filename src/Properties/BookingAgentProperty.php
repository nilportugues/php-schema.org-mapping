<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * 'bookingAgent' is an out-dated term indicating a 'broker' that serves as a booking agent.
 */
class BookingAgentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/bookingAgent';
    const PROPERTY_NAME = 'bookingAgent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Reservation',
    ];
}
