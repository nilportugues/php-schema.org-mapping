<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A medical test typically performed given this condition.
 */
class TypicalTestProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/typicalTest';
    const PROPERTY_NAME = 'typicalTest';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalCondition',
    ];
}
