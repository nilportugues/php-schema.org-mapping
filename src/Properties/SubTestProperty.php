<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A component test of the panel.
 */
class SubTestProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/subTest';
    const PROPERTY_NAME = 'subTest';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalTestPanel',
    ];
}
