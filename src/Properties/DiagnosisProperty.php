<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * One or more alternative conditions considered in the differential diagnosis process.
 */
class DiagnosisProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/diagnosis';
    const PROPERTY_NAME = 'diagnosis';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DDxElement',
    ];
}
