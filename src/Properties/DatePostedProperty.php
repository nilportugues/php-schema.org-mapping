<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Publication date for the job posting.
 */
class DatePostedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/datePosted';
    const PROPERTY_NAME = 'datePosted';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
