<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of axles.
 */
class NumberOfAxlesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numberOfAxles';
    const PROPERTY_NAME = 'numberOfAxles';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
