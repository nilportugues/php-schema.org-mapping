<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Maximal age recommended for viewing content.
 */
class SuggestedMaxAgeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/suggestedMaxAge';
    const PROPERTY_NAME = 'suggestedMaxAge';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PeopleAudience',
    ];
}
