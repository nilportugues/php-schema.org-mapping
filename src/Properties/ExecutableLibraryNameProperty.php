<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Library file name e.g., mscorlib.dll, system.web.dll.
 */
class ExecutableLibraryNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/executableLibraryName';
    const PROPERTY_NAME = 'executableLibraryName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/APIReference',
    ];
}
