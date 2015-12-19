<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Length of time to engage in the activity.
 */
class ActivityDurationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/activityDuration';
    const PROPERTY_NAME = 'activityDuration';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExercisePlan',
    ];
}
