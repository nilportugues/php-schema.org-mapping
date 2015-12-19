<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The passenger's sequence number as assigned by the airline.
 */
class PassengerSequenceNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/passengerSequenceNumber';
    const PROPERTY_NAME = 'passengerSequenceNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/FlightReservation',
    ];
}
