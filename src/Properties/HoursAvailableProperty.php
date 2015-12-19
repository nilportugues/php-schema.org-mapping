<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The hours during which this service or contact is available.
 */
class HoursAvailableProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/hoursAvailable';
    const PROPERTY_NAME = 'hoursAvailable';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ContactPoint',
        'http://schema.org/Service',
    ];
}
