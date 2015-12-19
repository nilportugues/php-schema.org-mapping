<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The type of security screening the passenger is subject to.
 */
class SecurityScreeningProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/securityScreening';
    const PROPERTY_NAME = 'securityScreening';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/FlightReservation',
    ];
}
