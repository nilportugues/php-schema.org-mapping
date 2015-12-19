<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An underlying cause. More specifically, one of the causative agent(s) that are most directly responsible for the pathophysiologic process that eventually results in the occurrence.
 */
class CauseProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/cause';
    const PROPERTY_NAME = 'cause';

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
