<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The location in which the strength is available.
 */
class AvailableInProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availableIn';
    const PROPERTY_NAME = 'availableIn';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DrugStrength',
    ];
}
