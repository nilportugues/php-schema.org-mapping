<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0).
 */
class RuntimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/runtime';
    const PROPERTY_NAME = 'runtime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareSourceCode',
    ];
}
