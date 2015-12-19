<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
 */
class RecommendedIntakeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/recommendedIntake';
    const PROPERTY_NAME = 'recommendedIntake';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DietarySupplement',
    ];
}
