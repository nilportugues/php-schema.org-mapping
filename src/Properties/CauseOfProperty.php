<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The condition, complication, symptom, sign, etc. caused.
 */
class CauseOfProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/causeOf';
    const PROPERTY_NAME = 'causeOf';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalCause',
    ];
}
