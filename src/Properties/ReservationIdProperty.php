<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A unique identifier for the reservation.
 */
class ReservationIdProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/reservationId';
    const PROPERTY_NAME = 'reservationId';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Reservation',
    ];
}
