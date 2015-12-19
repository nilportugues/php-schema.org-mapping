<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The street address. For example, 1600 Amphitheatre Pkwy.
 */
class StreetAddressProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/streetAddress';
    const PROPERTY_NAME = 'streetAddress';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PostalAddress',
    ];
}
