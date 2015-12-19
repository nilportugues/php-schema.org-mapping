<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Minimal age recommended for viewing content.
 */
class SuggestedMinAgeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/suggestedMinAge';
    const PROPERTY_NAME = 'suggestedMinAge';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PeopleAudience',
    ];
}
