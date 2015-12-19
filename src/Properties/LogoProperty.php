<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An associated logo.
 */
class LogoProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/logo';
    const PROPERTY_NAME = 'logo';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Place',
        'http://schema.org/Product',
        'http://schema.org/Brand',
    ];
}
