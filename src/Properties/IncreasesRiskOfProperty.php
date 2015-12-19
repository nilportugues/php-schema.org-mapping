<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The condition, complication, etc. influenced by this factor.
 */
class IncreasesRiskOfProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/increasesRiskOf';
    const PROPERTY_NAME = 'increasesRiskOf';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalRiskFactor',
    ];
}
