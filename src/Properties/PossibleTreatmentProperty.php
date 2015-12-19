<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A possible treatment to address this condition, sign or symptom.
 */
class PossibleTreatmentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/possibleTreatment';
    const PROPERTY_NAME = 'possibleTreatment';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalCondition',
        'http://schema.org/MedicalSignOrSymptom',
    ];
}
