<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The duration for which the given offer is valid.
 */
class EligibleDurationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/eligibleDuration';
    const PROPERTY_NAME = 'eligibleDuration';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Demand',
    ];
}
