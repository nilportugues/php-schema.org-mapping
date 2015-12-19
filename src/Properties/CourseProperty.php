<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of location. The course where this action was taken.
 */
class CourseProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/course';
    const PROPERTY_NAME = 'course';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExerciseAction',
    ];
}
