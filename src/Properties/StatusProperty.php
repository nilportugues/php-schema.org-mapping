<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The status of the study (enumerated).
 */
class StatusProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/status';
    const PROPERTY_NAME = 'status';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalStudy',
    ];
}
