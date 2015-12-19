<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A ticket associated with the reservation.
 */
class ReservedTicketProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/reservedTicket';
    const PROPERTY_NAME = 'reservedTicket';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Reservation',
    ];
}
