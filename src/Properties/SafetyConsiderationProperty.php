<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Any potential safety concern associated with the supplement. May include interactions with other drugs and foods, pregnancy, breastfeeding, known adverse reactions, and documented efficacy of the supplement.
 */
class SafetyConsiderationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/safetyConsideration';
    const PROPERTY_NAME = 'safetyConsideration';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DietarySupplement',
    ];
}
