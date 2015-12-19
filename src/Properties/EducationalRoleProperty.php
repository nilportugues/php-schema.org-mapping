<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An educationalRole of an EducationalAudience.
 */
class EducationalRoleProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/educationalRole';
    const PROPERTY_NAME = 'educationalRole';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/EducationalAudience',
    ];
}
