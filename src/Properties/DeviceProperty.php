<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Device required to run the application. Used in cases where a specific make/model is required to run the application.
 */
class DeviceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/device';
    const PROPERTY_NAME = 'device';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
