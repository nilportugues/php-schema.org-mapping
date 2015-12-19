<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * When a taxi will pickup a passenger or a rental car can be picked up.
 */
class PickupTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/pickupTime';
    const PROPERTY_NAME = 'pickupTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/RentalCarReservation',
        'http://schema.org/TaxiReservation',
    ];
}
