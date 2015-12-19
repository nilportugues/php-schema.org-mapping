<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date when the item is no longer valid.
 */
class ValidUntilProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/validUntil';
    const PROPERTY_NAME = 'validUntil';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Permit',
    ];
}
