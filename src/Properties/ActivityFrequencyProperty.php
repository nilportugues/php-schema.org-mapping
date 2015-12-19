<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * How often one should engage in the activity.
 */
class ActivityFrequencyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/activityFrequency';
    const PROPERTY_NAME = 'activityFrequency';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExercisePlan',
    ];
}
