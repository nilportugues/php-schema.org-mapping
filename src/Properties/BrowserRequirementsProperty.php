<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Specifies browser requirements in human-readable text. For example,"requires HTML5 support".
 */
class BrowserRequirementsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/browserRequirements';
    const PROPERTY_NAME = 'browserRequirements';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WebApplication',
    ];
}
