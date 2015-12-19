<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Expected or actual outcomes of the study.
 */
class OutcomeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/outcome';
    const PROPERTY_NAME = 'outcome';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalStudy',
    ];
}
