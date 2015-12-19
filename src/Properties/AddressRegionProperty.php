<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The region. For example, CA.
 */
class AddressRegionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/addressRegion';
    const PROPERTY_NAME = 'addressRegion';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PostalAddress',
    ];
}
