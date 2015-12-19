<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A physical examination that can identify this sign.
 */
class IdentifyingExamProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/identifyingExam';
    const PROPERTY_NAME = 'identifyingExam';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalSign',
    ];
}
