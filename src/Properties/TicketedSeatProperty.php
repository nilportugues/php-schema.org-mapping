<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The seat associated with the ticket.
 */
class TicketedSeatProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/ticketedSeat';
    const PROPERTY_NAME = 'ticketedSeat';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Ticket',
    ];
}
