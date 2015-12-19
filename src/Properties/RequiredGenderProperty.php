<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Audiences defined by a person's gender.
 */
class RequiredGenderProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/requiredGender';
    const PROPERTY_NAME = 'requiredGender';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PeopleAudience',
    ];
}
