<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Device required to run the application. Used in cases where a specific make/model is required to run the application.
 */
class AvailableOnDeviceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availableOnDevice';
    const PROPERTY_NAME = 'availableOnDevice';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
