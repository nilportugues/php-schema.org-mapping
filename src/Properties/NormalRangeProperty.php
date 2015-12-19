<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Range of acceptable values for a typical patient, when applicable.
 */
class NormalRangeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/normalRange';
    const PROPERTY_NAME = 'normalRange';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalTest',
    ];
}
