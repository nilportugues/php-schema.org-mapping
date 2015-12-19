<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A license document that applies to this content, typically indicated by URL.
 */
class LicenseProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/license';
    const PROPERTY_NAME = 'license';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
