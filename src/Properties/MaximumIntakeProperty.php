<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Recommended intake of this supplement for a given population as defined by a specific recommending authority.
 */
class MaximumIntakeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/maximumIntake';
    const PROPERTY_NAME = 'maximumIntake';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DietarySupplement',
    ];
}
