<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The algorithm or rules to follow to compute the score.
 */
class AlgorithmProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/algorithm';
    const PROPERTY_NAME = 'algorithm';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalRiskScore',
    ];
}
