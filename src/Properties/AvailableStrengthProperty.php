<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An available dosage strength for the drug.
 */
class AvailableStrengthProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availableStrength';
    const PROPERTY_NAME = 'availableStrength';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
