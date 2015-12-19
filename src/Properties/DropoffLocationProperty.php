<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Where a rental car can be dropped off.
 */
class DropoffLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/dropoffLocation';
    const PROPERTY_NAME = 'dropoffLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/RentalCarReservation',
    ];
}
