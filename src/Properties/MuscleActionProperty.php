<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The movement the muscle generates.
 */
class MuscleActionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/muscleAction';
    const PROPERTY_NAME = 'muscleAction';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Muscle',
    ];
}
