<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * When a rental car can be dropped off.
 */
class DropoffTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/dropoffTime';
    const PROPERTY_NAME = 'dropoffTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/RentalCarReservation',
    ];
}
