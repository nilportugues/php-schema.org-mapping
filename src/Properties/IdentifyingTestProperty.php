<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A diagnostic test that can identify this sign.
 */
class IdentifyingTestProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/identifyingTest';
    const PROPERTY_NAME = 'identifyingTest';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalSign',
    ];
}
