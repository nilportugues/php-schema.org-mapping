<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Reference to an asset (e.g., Barcode, QR code image or PDF) usable for entrance.
 */
class TicketTokenProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/ticketToken';
    const PROPERTY_NAME = 'ticketToken';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Ticket',
    ];
}
