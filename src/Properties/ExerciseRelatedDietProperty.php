<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of instrument. The diet used in this action.
 */
class ExerciseRelatedDietProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/exerciseRelatedDiet';
    const PROPERTY_NAME = 'exerciseRelatedDiet';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExerciseAction',
    ];
}
