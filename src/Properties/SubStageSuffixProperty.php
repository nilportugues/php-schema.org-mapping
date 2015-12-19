<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The substage, e.g. 'a' for Stage IIIa.
 */
class SubStageSuffixProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/subStageSuffix';
    const PROPERTY_NAME = 'subStageSuffix';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalConditionStage',
    ];
}
