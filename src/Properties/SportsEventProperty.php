<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of location. The sports event where this action occurred.
 */
class SportsEventProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sportsEvent';
    const PROPERTY_NAME = 'sportsEvent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExerciseAction',
    ];
}
