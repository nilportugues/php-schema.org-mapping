<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Any FDA or other warnings about the drug (text or URL).
 */
class WarningProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/warning';
    const PROPERTY_NAME = 'warning';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
