<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Type of app development: phone, Metro style, desktop, XBox, etc.
 */
class TargetPlatformProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/targetPlatform';
    const PROPERTY_NAME = 'targetPlatform';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/APIReference',
    ];
}
