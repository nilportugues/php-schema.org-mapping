<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Type(s) of exercise or activity, such as strength training, flexibility training, aerobics, cardiac rehabilitation, etc.
 */
class ExerciseTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/exerciseType';
    const PROPERTY_NAME = 'exerciseType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExercisePlan',
        'http://schema.org/ExerciseAction',
    ];
}
