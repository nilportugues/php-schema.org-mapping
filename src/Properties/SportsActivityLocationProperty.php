<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of location. The sports activity location where this action occurred.
 */
class SportsActivityLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sportsActivityLocation';
    const PROPERTY_NAME = 'sportsActivityLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExerciseAction',
    ];
}
