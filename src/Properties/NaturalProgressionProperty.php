<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The expected progression of the condition if it is not treated and allowed to progress naturally.
 */
class NaturalProgressionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/naturalProgression';
    const PROPERTY_NAME = 'naturalProgression';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalCondition',
    ];
}
