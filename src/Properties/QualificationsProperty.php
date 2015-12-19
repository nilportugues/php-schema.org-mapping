<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Specific qualifications required for this role.
 */
class QualificationsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/qualifications';
    const PROPERTY_NAME = 'qualifications';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
