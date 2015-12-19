<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Number of people the reservation should accommodate.
 */
class PartySizeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/partySize';
    const PROPERTY_NAME = 'partySize';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/FoodEstablishmentReservation',
        'http://schema.org/TaxiReservation',
    ];
}
