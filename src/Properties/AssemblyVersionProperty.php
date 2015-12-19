<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Associated product/technology version. e.g., .NET Framework 4.5.
 */
class AssemblyVersionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/assemblyVersion';
    const PROPERTY_NAME = 'assemblyVersion';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/APIReference',
    ];
}
