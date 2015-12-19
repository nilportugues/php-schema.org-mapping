<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Audiences defined by a person's maximum age.
 */
class RequiredMaxAgeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/requiredMaxAge';
    const PROPERTY_NAME = 'requiredMaxAge';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PeopleAudience',
    ];
}
