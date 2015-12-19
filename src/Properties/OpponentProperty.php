<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of participant. The opponent on this action.
 */
class OpponentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/opponent';
    const PROPERTY_NAME = 'opponent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExerciseAction',
    ];
}
