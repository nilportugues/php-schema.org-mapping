<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The title of the job.
 */
class TitleProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/title';
    const PROPERTY_NAME = 'title';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
