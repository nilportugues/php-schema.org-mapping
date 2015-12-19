<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The stage represented as a number, e.g. 3.
 */
class StageAsNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/stageAsNumber';
    const PROPERTY_NAME = 'stageAsNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalConditionStage',
    ];
}
