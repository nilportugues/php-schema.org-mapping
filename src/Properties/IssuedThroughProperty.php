<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The service through with the permit was granted.
 */
class IssuedThroughProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/issuedThrough';
    const PROPERTY_NAME = 'issuedThrough';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Permit',
    ];
}
