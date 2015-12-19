<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Description of skills and experience needed for the position.
 */
class ExperienceRequirementsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/experienceRequirements';
    const PROPERTY_NAME = 'experienceRequirements';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
