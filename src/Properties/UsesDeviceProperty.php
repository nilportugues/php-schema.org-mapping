<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Device used to perform the test.
 */
class UsesDeviceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/usesDevice';
    const PROPERTY_NAME = 'usesDevice';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalTest',
    ];
}
