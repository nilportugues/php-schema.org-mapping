<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The total price for the reservation or ticket, including applicable taxes, shipping, etc.
 */
class TotalPriceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/totalPrice';
    const PROPERTY_NAME = 'totalPrice';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Reservation',
        'http://schema.org/Ticket',
    ];
}
