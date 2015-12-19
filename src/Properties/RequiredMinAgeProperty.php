<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Audiences defined by a person's minimum age.
 */
class RequiredMinAgeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/requiredMinAge';
    const PROPERTY_NAME = 'requiredMinAge';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PeopleAudience',
    ];
}
