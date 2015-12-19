<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date that this organization was founded.
 */
class FoundingDateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/foundingDate';
    const PROPERTY_NAME = 'foundingDate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
    ];
}
