<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * True if the drug is available in a generic form (regardless of name).
 */
class IsAvailableGenericallyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/isAvailableGenerically';
    const PROPERTY_NAME = 'isAvailableGenerically';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
