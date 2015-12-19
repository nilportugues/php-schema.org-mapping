<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The condition, complication, or symptom whose risk is being estimated.
 */
class EstimatesRiskOfProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/estimatesRiskOf';
    const PROPERTY_NAME = 'estimatesRiskOf';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalRiskEstimator',
    ];
}
