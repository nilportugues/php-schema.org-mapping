<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Drugs that affect the test's results.
 */
class AffectedByProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/affectedBy';
    const PROPERTY_NAME = 'affectedBy';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalTest',
    ];
}
