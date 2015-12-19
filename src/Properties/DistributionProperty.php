<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A downloadable form of this dataset, at a specific location, in a specific format.
 */
class DistributionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/distribution';
    const PROPERTY_NAME = 'distribution';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Dataset',
    ];
}
