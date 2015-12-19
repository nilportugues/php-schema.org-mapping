<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Minimum memory requirements.
 */
class MemoryRequirementsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/memoryRequirements';
    const PROPERTY_NAME = 'memoryRequirements';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
