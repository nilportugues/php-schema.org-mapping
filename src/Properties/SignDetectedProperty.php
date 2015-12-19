<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sign detected by the test.
 */
class SignDetectedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/signDetected';
    const PROPERTY_NAME = 'signDetected';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalTest',
    ];
}
