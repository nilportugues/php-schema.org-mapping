<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The actual code.
 */
class CodeValueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/codeValue';
    const PROPERTY_NAME = 'codeValue';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalCode',
    ];
}
