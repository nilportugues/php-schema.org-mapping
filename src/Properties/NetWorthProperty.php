<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The total financial value of the person as calculated by subtracting assets from liabilities.
 */
class NetWorthProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/netWorth';
    const PROPERTY_NAME = 'netWorth';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
