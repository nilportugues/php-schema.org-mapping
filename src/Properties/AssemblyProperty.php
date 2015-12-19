<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Library file name e.g., mscorlib.dll, system.web.dll.
 */
class AssemblyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/assembly';
    const PROPERTY_NAME = 'assembly';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/APIReference',
    ];
}
