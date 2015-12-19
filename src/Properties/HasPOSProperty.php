<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Points-of-Sales operated by the organization or person.
 */
class HasPOSProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/hasPOS';
    const PROPERTY_NAME = 'hasPOS';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Person',
    ];
}
