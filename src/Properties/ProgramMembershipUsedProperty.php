<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Any membership in a frequent flyer, hotel loyalty program, etc. being applied to the reservation.
 */
class ProgramMembershipUsedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/programMembershipUsed';
    const PROPERTY_NAME = 'programMembershipUsed';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Reservation',
    ];
}
