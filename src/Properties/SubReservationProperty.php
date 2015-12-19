<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The individual reservations included in the package. Typically a repeated property.
 */
class SubReservationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/subReservation';
    const PROPERTY_NAME = 'subReservation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ReservationPackage',
    ];
}
