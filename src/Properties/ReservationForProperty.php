<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The thing -- flight, event, restaurant,etc. being reserved.
 */
class ReservationForProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/reservationFor';
    const PROPERTY_NAME = 'reservationFor';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Reservation',
    ];
}
