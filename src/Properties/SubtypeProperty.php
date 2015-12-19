<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A more specific type of the condition, where applicable, for example 'Type 1 Diabetes', 'Type 2 Diabetes', or 'Gestational Diabetes' for Diabetes.
 */
class SubtypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/subtype';
    const PROPERTY_NAME = 'subtype';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalCondition',
    ];
}
