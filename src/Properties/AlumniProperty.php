<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Alumni of an organization.
 */
class AlumniProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/alumni';
    const PROPERTY_NAME = 'alumni';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/EducationalOrganization',
        'http://schema.org/Organization',
    ];
}
