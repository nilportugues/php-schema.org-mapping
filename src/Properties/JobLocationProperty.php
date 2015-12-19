<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A (typically single) geographic location associated with the job position.
 */
class JobLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/jobLocation';
    const PROPERTY_NAME = 'jobLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
