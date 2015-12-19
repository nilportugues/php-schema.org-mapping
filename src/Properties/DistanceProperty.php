<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The distance travelled, e.g. exercising or travelling.
 */
class DistanceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/distance';
    const PROPERTY_NAME = 'distance';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExerciseAction',
        'http://schema.org/TravelAction',
    ];
}
