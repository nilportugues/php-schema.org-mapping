<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Features or modules provided by this application (and possibly required by other applications).
 */
class FeatureListProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/featureList';
    const PROPERTY_NAME = 'featureList';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
