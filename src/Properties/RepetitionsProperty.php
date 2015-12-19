<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Number of times one should repeat the activity.
 */
class RepetitionsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/repetitions';
    const PROPERTY_NAME = 'repetitions';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExercisePlan',
    ];
}
