<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of location. The original location of the object or the agent before the action.
 */
class FromLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/fromLocation';
    const PROPERTY_NAME = 'fromLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MoveAction',
        'http://schema.org/TransferAction',
        'http://schema.org/ExerciseAction',
    ];
}
