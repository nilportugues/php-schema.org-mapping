<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).
 */
class TemporalProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/temporal';
    const PROPERTY_NAME = 'temporal';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Dataset',
    ];
}
