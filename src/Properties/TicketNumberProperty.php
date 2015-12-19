<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The unique identifier for the ticket.
 */
class TicketNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/ticketNumber';
    const PROPERTY_NAME = 'ticketNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Ticket',
    ];
}
