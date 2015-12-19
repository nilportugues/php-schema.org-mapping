<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A person who founded this organization.
 */
class FoundersProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/founders';
    const PROPERTY_NAME = 'founders';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
    ];
}
