<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A condition the test is used to diagnose.
 */
class UsedToDiagnoseProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/usedToDiagnose';
    const PROPERTY_NAME = 'usedToDiagnose';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalTest',
    ];
}
