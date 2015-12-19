<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The stage of the condition, if applicable.
 */
class StageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/stage';
    const PROPERTY_NAME = 'stage';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalCondition',
    ];
}
