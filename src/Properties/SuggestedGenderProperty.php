<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The gender of the person or audience.
 */
class SuggestedGenderProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/suggestedGender';
    const PROPERTY_NAME = 'suggestedGender';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PeopleAudience',
    ];
}
