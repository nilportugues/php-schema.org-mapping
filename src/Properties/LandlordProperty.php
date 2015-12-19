<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of participant. The owner of the real estate property.
 */
class LandlordProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/landlord';
    const PROPERTY_NAME = 'landlord';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/RentAction',
    ];
}
