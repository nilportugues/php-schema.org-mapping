<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of instrument. The exercise plan used on this action.
 */
class ExercisePlanProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/exercisePlan';
    const PROPERTY_NAME = 'exercisePlan';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExerciseAction',
    ];
}
