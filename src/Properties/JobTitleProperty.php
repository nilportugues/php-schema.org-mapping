<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The job title of the person (for example, Financial Manager).
 */
class JobTitleProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/jobTitle';
    const PROPERTY_NAME = 'jobTitle';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
