<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The person or organization the reservation or ticket is for.
 */
class UnderNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/underName';
    const PROPERTY_NAME = 'underName';

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
