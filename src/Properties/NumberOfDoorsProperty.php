<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of doors.
 */
class NumberOfDoorsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numberOfDoors';
    const PROPERTY_NAME = 'numberOfDoors';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
