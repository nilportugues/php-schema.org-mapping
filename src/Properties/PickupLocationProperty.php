<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Where a taxi will pick up a passenger or a rental car can be picked up.
 */
class PickupLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/pickupLocation';
    const PROPERTY_NAME = 'pickupLocation';

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
