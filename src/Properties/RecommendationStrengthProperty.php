<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Strength of the guideline's recommendation (e.g. 'class I').
 */
class RecommendationStrengthProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/recommendationStrength';
    const PROPERTY_NAME = 'recommendationStrength';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalGuidelineRecommendation',
    ];
}
