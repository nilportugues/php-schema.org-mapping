<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The likely outcome in either the short term or long term of the medical condition.
 */
class ExpectedPrognosisProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/expectedPrognosis';
    const PROPERTY_NAME = 'expectedPrognosis';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalCondition',
    ];
}
