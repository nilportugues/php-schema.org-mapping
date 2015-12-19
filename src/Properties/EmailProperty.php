<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Email address.
 */
class EmailProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/email';
    const PROPERTY_NAME = 'email';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/ContactPoint',
        'http://schema.org/Person',
    ];
}
