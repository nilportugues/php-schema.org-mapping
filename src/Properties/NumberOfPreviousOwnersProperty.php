<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of owners of the vehicle, including the current one.
 */
class NumberOfPreviousOwnersProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numberOfPreviousOwners';
    const PROPERTY_NAME = 'numberOfPreviousOwners';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
