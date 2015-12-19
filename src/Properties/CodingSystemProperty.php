<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The coding system, e.g. 'ICD-10'.
 */
class CodingSystemProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/codingSystem';
    const PROPERTY_NAME = 'codingSystem';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalCode',
    ];
}
