<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
 */
class OperatingSystemProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/operatingSystem';
    const PROPERTY_NAME = 'operatingSystem';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
