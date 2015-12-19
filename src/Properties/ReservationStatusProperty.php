<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The current status of the reservation.
 */
class ReservationStatusProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/reservationStatus';
    const PROPERTY_NAME = 'reservationStatus';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Reservation',
    ];
}
