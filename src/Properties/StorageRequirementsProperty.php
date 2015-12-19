<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Storage requirements (free space required).
 */
class StorageRequirementsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/storageRequirements';
    const PROPERTY_NAME = 'storageRequirements';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
