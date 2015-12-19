<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The geographic area where the permit is valid.
 */
class ValidInProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/validIn';
    const PROPERTY_NAME = 'validIn';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Permit',
    ];
}
