<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The phase of the trial.
 */
class PhaseProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/phase';
    const PROPERTY_NAME = 'phase';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalTrial',
    ];
}
