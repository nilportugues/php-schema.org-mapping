<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
 */
class PotentialActionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/potentialAction';
    const PROPERTY_NAME = 'potentialAction';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Thing',
    ];
}
