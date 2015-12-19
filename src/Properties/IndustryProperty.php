<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The industry associated with the job position.
 */
class IndustryProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/industry';
    const PROPERTY_NAME = 'industry';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
