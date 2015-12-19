<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Educational background needed for the position.
 */
class EducationRequirementsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/educationRequirements';
    const PROPERTY_NAME = 'educationRequirements';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
